<?php

namespace App\Http\Controllers;

use App\Mail\MessageResponse;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function index(Request $request){
        $q = $request->q;

        if($q){
            $messages = Message::latest()->where('ticket_number', 'LIKE', '%'.$q.'%')
                                ->orWhere('email', 'LIKE', '%'.$q.'%')
                                ->orWhere('name', 'LIKE', '%'.$q.'%')
                                ->orWhere('phone', 'LIKE', '%'.$q.'%')
                                ->orWhere('message', 'LIKE', '%'.$q.'%')
                                ->paginate(5);

        }else{
            $messages = Message::latest()->paginate(5);
        }


        //dd($messages->toArray());
        return view('users.message.index', compact('messages'));
    }

    public function show(Message $message){

        return view('users.message.show', compact('message'));
    }
    public function store(Request $request){

       $validatedData =  $request->validate([
                            'name'  =>     ['required', 'max:255'],
                            'email' =>     ['required', 'email', 'max:255'],
                            'phone' =>     ['required', 'max:15'],
                            'message' =>   ['required', 'max:5000']
                        ]);

        //dd(Session::get('locale', 'en'));
        $validatedData['locale'] = Session::get('locale', 'en');
        $validatedData['ticket_number'] = $this->generate_unique_ticket_number();


        $message =  Message::create($validatedData);

        $this->sendMessageResponseEmail($message);
        return redirect()->back()->with('success', 'Message sent you will received a respond shortly');
    }

    public function destroy(Message $message){

        $message->delete();
        return redirect()->route('message.index')->with('success', 'Message  deleted successfully');


    }

   private function generate_unique_ticket_number() {
        $prefix = 'tk-';
        do {
            $uniqueNumber = rand(1000000000, 9999999999); // Generate a zero-padded 6-digit number
            $ticket_number = $prefix . $uniqueNumber;
        } while (Message::where('ticket_number', $ticket_number)->exists());

        return $ticket_number;
   }


   private function sendMessageResponseEmail(Message $message ){
        Mail::to($message->email)->queue(new MessageResponse($message));
        //Mail::mailer('support')->to($message->email)->queue(new MessageResponse($message));
   }
}

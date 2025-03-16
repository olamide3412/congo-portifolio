<?php


use App\Models\Customer;
use App\Models\MenuCategory;
use Carbon\Carbon;
use Illuminate\Routing\Controller;

if (!function_exists('format_date')) {
    function format_date($date) {
        return \Carbon\Carbon::parse($date)->format('d-m-Y');
    }
}

if (!function_exists('get_date_specific_format')) {
    function get_date_specific_format($date, $formart = 'D, d-M-Y') {
        return \Carbon\Carbon::parse($date)->format($formart);
    }
}

if (!function_exists('convert_to_naira')) {
    function convert_to_naira(int $amount) {
        $formattedAmount = number_format($amount, 2);

        // Add the currency symbol, e.g., '₦'
        return '₦' . $formattedAmount;
    }
}



if (!function_exists('generate_expected_time')) {
    function generate_expected_time() {
        $expected_time = Carbon::now()->addMinutes(30);
        return $expected_time;
    }
}




if(!function_exists('admin_icon')){
    function admin_icon(){
        return  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zM16.24 6.24l1.42-1.42 3.54 3.54-1.42 1.42-3.54-3.54zM2 6.82l3.54-3.54 1.42 1.42L3.42 8.24 2 6.82zm16.59 9.36l1.42-1.42 3.54 3.54-1.42 1.42-3.54-3.54zM4.24 18.59l3.54-3.54 1.42 1.42-3.54 3.54-1.42-1.42z"/>
                </svg>';
    }
}

if(!function_exists('super_admin_icon')){
    function super_admin_icon(){
        return  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4zm7.4-5.6l-1.4-1.4L19 5.8l1.4 1.4-1.4 1.4zm-14.8 0L5.8 8.4 7.2 7l1.4 1.4-1.4 1.4zM20 16.6l-1.4 1.4-1.4-1.4L19 15.2l1.4 1.4zM4 16.6l-1.4-1.4L5.8 15l1.4 1.4-1.4 1.4z"/>
                </svg>';
    }
}

if(!function_exists('user_icon')){
    function user_icon(){
        return  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/>
                </svg>';

    }
}




if(!function_exists('course_icon')){
    function course_icon(){
        return  '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="48" height="48">
                <path d="M20 2H8c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 15H9v-2h10v2zm0-4H9v-2h10v2zm0-4H9V7h10v2zm-12 9H4V5h3V4H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h3v-1z"/>
                </svg>';

    }
}





if (!function_exists('get_principal_officer_emails')) {
    function get_principal_officer_emails() {
        // Define your array with names and emails
        $array = [
            ['name' => 'Olamide Olasanmi', 'email' => 'olamide12813412@gmail.com'],
            ['name' => 'Isaiah Johnson Olamide', 'email' => 'isaiahjohnson3412@gmail.com'],
            ['name' => 'Emanuel Monday Ekere', 'email' => 'emonday739@gmail.com'],
            ['name' => 'Gbenga Sunday Josaiah', 'email' => 'gbengasunday800@gmail.com'],
            // Add more as needed
        ];

        return $array;
    }
}



if (!function_exists('get_minutes_left')) {
    function get_minutes_left($targetTime) {
                // Get the current time
        $currentTime = new DateTime();

        // Convert the target time string to a DateTime object
        $targetDateTime = new DateTime($targetTime);

        if($currentTime > $targetDateTime){
            return  0;
        }
        // Calculate the difference between the target time and the current time
        $interval = $currentTime->diff($targetDateTime);

        // Convert the difference to total minutes
        $minutesLeft = ($interval->days * 24 * 60) + ($interval->h * 60) + $interval->i;

        // Return the number of minutes left
        return $minutesLeft > 0 ? $minutesLeft : 0;
    }
}


if (!function_exists('get_date_time_interval')) {
    function get_date_time_interval($date) {
        $targetDate = \Carbon\Carbon::parse($date);
        $currentDate = \Carbon\Carbon::now();

        // If the target date is in the future
        if ($targetDate->greaterThan($currentDate)) {
            $diffInSeconds = $currentDate->diffInSeconds($targetDate);

            if ($diffInSeconds < 60) {
                return $diffInSeconds . ' seconds left';
            }

            $diffInMinutes = $currentDate->diffInMinutes($targetDate);

            if ($diffInMinutes < 60) {
                return $diffInMinutes . ' minutes left';
            }

            $diffInHours = $currentDate->diffInHours($targetDate);

            if ($diffInHours < 24) {
                return $diffInHours . ' hours left';
            }

            $diffInDays = $currentDate->diffInDays($targetDate);

            if ($diffInDays < 7) {
                return $diffInDays . ' days left';
            }

            return $targetDate->format('d-m-Y');
        } else {
            // If the target date is in the past
            $diffInSeconds = $targetDate->diffInSeconds($currentDate);

            if ($diffInSeconds < 60) {
                return (int)$diffInSeconds . ' secs ago';
            }

            $diffInMinutes = $targetDate->diffInMinutes($currentDate);

            if ($diffInMinutes < 60) {
                return (int)$diffInMinutes . ' mins ago';
            }

            $diffInHours = $targetDate->diffInHours($currentDate);

            if ($diffInHours < 24) {
                return (int)$diffInHours . ' hrs ago';
            }

            $diffInDays = $targetDate->diffInDays($currentDate);

            if ($diffInDays < 7) {
                return (int)$diffInDays . ' days ago';
            }

            return $targetDate->format('D, d-M-Y');
        }
    }
}



import './bootstrap';
import Alpine from 'alpinejs';
import toastr from 'toastr';
import 'toastr/build/toastr.min.css';
import.meta.glob([
    '../images/**'
]);






document.addEventListener('DOMContentLoaded', () => {
    const sidebarOpen = document.getElementById('sidebarOpen');
    const sidebarClose = document.getElementById('sidebarClose');
    const sidebar = document.getElementById('sidebar');

    sidebarOpen.addEventListener('click', () => {
        sidebar.classList.remove('-translate-x-full');
    });

    sidebarClose.addEventListener('click', () => {
       sidebar.classList.add('-translate-x-full');
    });



    toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    };

    // Show a sample Toastr message
    //toastr.success('Hello, world!');

});




window.showToastr = function() {
    toastr.success('This is a success message!');
};

// Expose toastr globally if needed
window.toastr = toastr;

window.Alpine = Alpine;
Alpine.start();

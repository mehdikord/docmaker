@if(\Illuminate\Support\Facades\Session::has('alert_message_message'))
    <script>
    toastr.options = {
        "closeButton": false,
        "debug": false,
        "newestOnTop": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
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
    toastr.{{\Illuminate\Support\Facades\Session::get('alert_message_level')}}("{{\Illuminate\Support\Facades\Session::get('alert_message_message')}}");
</script>
@endif

@if(\Illuminate\Support\Facades\Session::has('front_alert_message_message'))
    <script>
        Swal.fire({
            position: 'bottom-end',
            icon: '{{\Illuminate\Support\Facades\Session::get('front_alert_message_level')}}',
            text: '{{\Illuminate\Support\Facades\Session::get('front_alert_message_message')}}',
            showConfirmButton: false,
            timer: 5000
        })
    </script>
    @endif

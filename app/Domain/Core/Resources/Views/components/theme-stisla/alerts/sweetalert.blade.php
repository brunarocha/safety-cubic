{{--
@component('core::components.theme-stisla.alerts.sweetalert') @endcomponent
--}}

@if(Session::has('message'))
    <script>
        window.onload = function() {
            swal({
                position: 'center',
                text: '{{Session::get('message')}}',
                icon: 'success',
                button: false,
                timer: 3000
            })
        };
    </script>
@endif

@if(Session::has('error'))
    <script>
        window.onload = function() {
            swal({
                position: 'center',
                text: '{{Session::get('error')}}',
                icon: 'error',
                button: false,
                timer: 3000
            })
        };
    </script>
@endif
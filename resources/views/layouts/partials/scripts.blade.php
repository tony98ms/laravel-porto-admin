<!-- Vendor -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/vendor.min.js') }}"></script>
<script src="{{ asset('js/theme.min.js') }}"></script>
@livewireScripts
<script src="https://cdn.jsdelivr.net/npm/izitoast@1.4.0/dist/js/iziToast.min.js">
</script>
<x-livewire-notification::toast />
@yield('javascript')
@if (Session::has('message'))
    <input type="hidden" id="flassMessage" data-title="{{ Session::get('title', 'Mensaje') }}"
        data-class="{{ Session::get('alert-class', 'alert-info') }}" data-message="{{ Session::get('message') }}" />
    <script>
        var title = $("#flassMessage").data('title');
        var tipo = $("#flassMessage").data('class');
        var message = $("#flassMessage").data('message');
        new PNotify({
            title: title,
            text: message,
            type: tipo,
            icon: 'icons icon-check'
        });
    </script>
@endif

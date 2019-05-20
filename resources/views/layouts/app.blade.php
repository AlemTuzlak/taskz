<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('layouts.head')
<body>
<div id="app">
    @include('layouts.header')
    <main class="py-4">
        @yield('content')
    </main>
</div>
<script src="{{ asset('js/bootstrap.js') }}"></script>
<script src="{{ asset('js/fontawesome.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
{{--
<script>
    $(document).ready(function () {
        $('.confirm-dialog').confirm({
            text: 'Are you sure you want to delete this board',
            confirmButton: "Yes",
            cancelButton: "No"
        });
    })
</script>
--}}
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('page-title')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <style>
        .dotted-bg {
            background-color: #059669;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
        }

        .diagonal-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23059669' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
        }
    </style>
    
    @yield('css')

</head>
<body class="flex flex-row justify-center items-start diagonal-bg w-full h-full scroll-smooth">
    <div class="flex flex-row justify-start items-start w-full">
    
        @include('admin.components.head')
        @yield('content')

    </div>

<!--scripts-->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script src="https://maps.google.com/maps/api/js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

<script>
    function openSidebar() {
        jQuery('#open-sidebar').toggle();
        jQuery('#close-sidebar').toggle();

        jQuery('#app-name').toggle();
        jQuery('#profile-label').toggle();
        jQuery('#v-tracking-label').toggle();
        jQuery('#d-management-label').toggle();
        jQuery('#v-management-label').toggle();
        jQuery('#t-tickets-label').toggle();

        jQuery('#app-name').css('flex-direction', 'row');
        jQuery('#user').css('flex-direction', 'row');
        jQuery('#vehicle-tracking').css('flex-direction', 'row');
        jQuery('#driver-management').css('flex-direction', 'row');
        jQuery('#vehicle-management').css('flex-direction', 'row');
        jQuery('#trip-tickets').css('flex-direction', 'row');

        jQuery('#sidebar').css('width', '288px');
        jQuery('#sidebar').css('transition', 'width 0.5s');
    }

    function closeSidebar() {
        jQuery('#open-sidebar').toggle();
        jQuery('#close-sidebar').toggle();

        jQuery('#app-name').toggle();
        jQuery('#profile-label').toggle();
        jQuery('#v-tracking-label').toggle();
        jQuery('#d-management-label').toggle();
        jQuery('#v-management-label').toggle();
        jQuery('#t-tickets-label').toggle();

        jQuery('#app-name').css('flex-direction', 'column');
        jQuery('#user').css('flex-direction', 'column');
        jQuery('#vehicle-tracking').css('flex-direction', 'column');
        jQuery('#driver-management').css('flex-direction', 'column');
        jQuery('#vehicle-management').css('flex-direction', 'column');
        jQuery('#trip-tickets').css('flex-direction', 'column');

        jQuery('#sidebar').css('width', '64px');
        jQuery('#sidebar').css('transition', 'width 0.5s');
    }
</script>

@yield('js')
<!--script ends here-->
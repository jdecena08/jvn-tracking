<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JVN Tracking</title>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

    <style>
        .dotted-bg {
            background-color: #059669;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='4' viewBox='0 0 4 4'%3E%3Cpath fill='%23ffffff' fill-opacity='0.1' d='M1 3h1v1H1V3zm2-2h1v1H3V1z'%3E%3C/path%3E%3C/svg%3E");
        }

        .diagonal-bg {
            background-image: url("data:image/svg+xml,%3Csvg width='6' height='6' viewBox='0 0 6 6' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%23059669' fill-opacity='0.4' fill-rule='evenodd'%3E%3Cpath d='M5 0h1L0 6V5zM6 5v1H5z'/%3E%3C/g%3E%3C/svg%3E");
        }

    </style>

</head>
<body class="justify-center items-center w-full scroll-smooth diagonal-bg">
    <!--header-->
    <header class="flex flex-col text-base fixed top-0 z-50 w-full">
        <div class="flex flex-row justify-between px-4 py-2 text-sm bg-neutral-200 h-11">
            <div class="flex flex-row justify-center items-center">
                <span class="text-left text-emerald-600">© 2022 Joint Venture National. All Rights Reserved.</span>
            </div>
            <div class="flex flex-row justify-center items-center">
                <a href="#" class="flex flex-row items-center text-emerald-600 hover:text-green-400 font-semibold gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span id="language">English</span>
                </a>
            </div>
        </div>

        <div class="flex flex-row justify-between px-4 py-2 dotted-bg h-11" id="header_frame">
            <div class="flex flex-row justify-center items-center">
                <a href="{{route('home')}}" class="text-left text-neutral-200 font-bold">JVN Tracking</a>
            </div>
            <div class="flex flex-row justify-center items-center gap-4">
            <a href="{{route('home')}}" id="book" class="text-left text-neutral-200 hover:text-green-400 font-bold">Book</a>
                <a href="{{route('track-and-trace')}}" id="track-trace" class="text-left text-neutral-200 hover:text-green-400 font-bold">Track & Trace</a>
                <a href="{{route('transaction-history')}}" id="transaction" class="text-left text-neutral-200 hover:text-green-400 font-bold">Transaction History</a>
                <a href="{{route('about-us')}}" id="about-us" class="text-left text-neutral-200 hover:text-green-400 font-bold">About Us</a>
                <a href="{{route('help-page')}}" id="help" class="text-left text-neutral-200 hover:text-green-400 font-bold">Help</a>
            </div>
            <div class="flex flex-row justify-center items-center gap-4">
                <a href="#" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us">Login</a>
                <a href="#" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us">Sign Up</a>
            </div>
        </div>
    </header>
    <!--header ends here-->


    <div class="flex flex-col justify-center items-center pt-20 w-full">
        <div class="flex flex-col justify-center items-center pt-10 w-3/4 gap-8">
            <!--content-->
            <div class="pt-20"></div>

            <table class="text-center font-medium border border-emerald-700 w-full">
                <thead>
                    <tr class="dotted-bg text-neutral-200">
                        <th class="px-2 py-1 border border-emerald-700">Date Issued</th>
                        <th class="px-2 py-1 border border-emerald-700">Ticket Number</th>
                        <th class="px-2 py-1 border border-emerald-700">Ticket</th>
                        <th class="px-2 py-1 border border-emerald-700">Travel Info</th>
                    </tr>
                </thead>

                <tbody class="text-neutral-900 bg-neutral-200">
                    <tr>
                        <td class="px-2 py-1 border border-emerald-700">15 Jun 2022</td>
                        <td class="px-2 py-1 border border-emerald-700">123456abcde</td>
                        <td class="px-2 py-1 border border-emerald-700">
                            <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                        </td>
                        <td class="px-2 py-1 border border-emerald-700">
                            <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                        </td>
                    </tr>

                    <tr>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                    </tr>

                    <tr>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                    </tr>

                    <tr>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                    </tr>

                    <tr>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                        <td class="px-2 py-1 border border-emerald-700">-</td>
                    </tr>
                </tbody>
            </table>
            <!--content ends here-->
        </div>
    </div>
</body>

<!--script-->
<script src="https://cdn.tailwindcss.com"></script>

<script>
    jQuery(document).ready(function() {
        jQuery(document).on("scroll", function() {
            if (jQuery(document).scrollTop() > 0) {
                $("#header_frame").css('opacity', '0.8');
            }
            else {
                $("#header_frame").css('opacity', '1');
            }

        })
    });

    jQuery(document).ready(function() {
        $("#transaction").css('color', '#4ade80');
    });
</script>
<!--script ends here-->
</html>

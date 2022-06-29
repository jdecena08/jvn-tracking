<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JVN Tracking</title>

</head>
<body class="justify-center items-center w-full scroll-smooth">
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

        <div class="flex flex-row justify-between px-4 py-2 bg-emerald-600 h-11" id="header_frame">
            <div class="flex flex-row justify-center items-center">
                <span class="text-left text-neutral-200 font-bold">JVN Tracking</span>
            </div>
            <div class="flex flex-row justify-center items-center gap-4">
                <a href="#" id="book" class="text-left text-neutral-200 hover:text-green-400 font-bold">Book</a>
                <a href="#" id="track-trace" class="text-left text-neutral-200 hover:text-green-400 font-bold">Track & Trace</a>
                <a href="#" id="transaction" class="text-left text-neutral-200 hover:text-green-400 font-bold">Transaction History</a>
                <a href="#" id="about-us" class="text-left text-neutral-200 hover:text-green-400 font-bold">About Us</a>
                <a href="#" id="help" class="text-left text-neutral-200 hover:text-green-400 font-bold">Help</a>
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
            <div class="flex flex-row justify-center items-center px-4 py-2 text-neutral-800 w-full gap-4">
                <select name="ticket-no" id="ticket-no" class="px-4 py-2 border-emerald-600 focus:outline-none">
                    <option value="0">Ticket Number</option>
                    <option value="1">as564g1rgegbvfd45r</option>
                    <option value="2">ferf54b5uyk8uj2bvc</option>
                </select>

                <input type="text" id="ticket-no" placeholder="Input Ticket Number" class="px-4 py-2 border border-emerald-600 focus:outline-none">

                <button class="px-4 py-2 text-center text-neutral-200 font-semibold bg-emerald-600 hover:bg-emerald-400 rounded-md w-1/12">Track</button>
            </div>

            <div class="flex justify-center items-center w-full">
                <img src="{{asset('media/img/gmaps.png')}}" alt="samp">
            </div>

            <div class="py-96"></div>
            <!--content ends here-->
        </div>
    </div>
</body>

<!--script-->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

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
        $("#track-trace").css('color', '#4ade80');
    });

</script>
<!--script ends here-->
</html>
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
                <span class="text-left text-emerald-600">© Copyright 2022. All Rights Reserved.</span>
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
    
    <!--content-->
    <div class="flex justify-center items-center pt-2 mt-20">
        <img src="{{asset('media/img/sample-1.png')}}" alt="samp">
    </div>

    <div class="px-4 py-2 w-full">
        <div class="flex flex-row justify-center items-center px-4 py-2 bg-emerald-600 rounded-md gap-2">
            <div class="flex flex-row w-full">
                <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-1/2">
                    <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Origin</label>
                    <input type="text" placeholder="Input Origin" id="origin" class="bg-neutral-200 focus:outline-none">
                </div>
                <div class="py-4">
                    <div class="border-l border-emerald-600"></div>
                </div>
                <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-1/2">
                    <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Destination</label>
                    <input type="text" placeholder="Input Destination" id="origin" class="bg-neutral-200 focus:outline-none">
                </div>
            </div>

            
            <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-1/2">
                <label for="no-of-passengers">No. of Passengers</label>
                <select name="no-of-passengers" id="no-of-passengers" class="focus:outline-none">
                    <option value="0">-</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
            </div>
            

            <div class="flex flex-row w-full">
                <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-1/2">
                    <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Depart</label>
                    <input type="date" placeholder="MM/DD/YYYY" id="origin" class="bg-neutral-200 focus:outline-none">
                </div>
                <div class="py-4">
                    <div class="border-l border-emerald-600"></div>
                </div>
                <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-1/2">
                    <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Return</label>
                    <input type="date" placeholder="MM/DD/YYYY" id="origin" class="bg-neutral-200 focus:outline-none">
                </div>
            </div>

            <div class="flex flex-col px-2 py-1 w-1/2">
                <span id="van-available" class="hidden py-1 text-center text-green-400 font-bold border border-green-500 rounded-md ">Van Available</span>
                <span id="not-available" class="py-1 text-center text-yellow-400 font-bold border border-yellow-500 rounded-md">Van Not Available</span>
            </div>

        </div>
    </div>

    <div class="grid grid-cols-2 justify-center px-4 py-2 w-full gap-x-16" id="pax_info_container">
        <!-- <div class="flex flex-row gap-3 w-1/2">
            <input type="text" placeholder="Passenger" id="passenger" class="px-4 py-2 border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">
            <input type="text" placeholder="Pick-up Point" id="passenger" class="px-4 py-2 border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">
        </div> -->
    </div>

    <div class="flex items-center justify-end px-4 py-2 mt-6 w-full">
        <button id="bookbtn" class="hidden text-center font-semibold px-4 py-2 text-neutral-200 bg-emerald-600 hover:bg-emerald-400 rounded-md">Book</button>
    </div>

    <div class="py-96"></div>
    <!--content ends here-->
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
        $("#book").css('color', '#4ade80');
    });

    jQuery(document).ready(function() {
        jQuery('#menu-button').on("click", function() {
            $("#menu").toggle();
        })
    });

    $('#no-of-passengers').on('change', function() {
        var val = this.value
        var html = '';
        for(var i = 0; i< val; i++) {
            html +=  '<div class="flex flex-row justify-center items-center py-2 gap-3 w-full">' +
            '<input type="text" placeholder="Passenger" class="px-4 py-2 w-full border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">' +
            '<input type="text" placeholder="Pick-up Point" class="px-4 py-2 w-full border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">' +
            '</div>'
        }

        $('#pax_info_container').html(html);
        if(val > 0)
        {    
            $('#bookbtn').css('display', 'block');
        }
        else {
            $('#bookbtn').css('display', 'none');
        } 
    })

</script>
<!--script ends here-->
</html>
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

        .company-bg {
            background-color: #ffffff;
            background-image:url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' version='1.1' height='100%' width='100%'><text x='-100' y='500' fill='grey' font-weight='800' font-family='calibri' font-size='120' transform='rotate(-30 20,40)' opacity='0.3'>Company Copy</text></svg>");
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
        <div class="flex flex-col justify-center items-center pt-10 w-full sm:w-11/12 md:w-9/12 lg:w-7/12 gap-10">
            <!--content-->

            <!--company copy-->
            <div class="bg-white w-full">
                <span class="hidden md:flex absolute text-center text-neutral-600 opacity-30 font-black -rotate-45 mt-72 md:w-10/12 lg:w-7/12" style="font-size: 7rem;">Company Copy</span>
                <span class="md:hidden absolute text-center text-7xl text-neutral-600 opacity-30 font-black -rotate-45 mt-64 w-full">Company Copy</span>
                <div class="flex flex-row justify-between items-center font-bold pt-4 pb-2 w-full">
                    <div class="flex flex-row">
                        <span class="px-4">JVN Tracking</span>
                    </div>

                    <div class="flex flex-row divide-x-2 divide-black">
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Print</span>
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Download</span>
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Copy Ticket No.</span>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold py-2 w-full">
                    <div class="flex flex-row">
                        <span class="px-4">Date Issued:</span>
                        <span class="font-medium text-sky-600">15 Jun 2022</span>
                    </div>

                    <div class="flex flex-row px-4">
                        <span class="px-4">Ticket No:</span>
                        <span class="font-medium text-sky-600">123456abcde</span>
                    </div>
                </div>

                <div class="px-4 py-2 w-full">
                    <div class="flex flex-col items-center font-bold border-y border-black w-full gap-8">
                        <div class="grid grid-cols-4 py-2 justify-between w-full">
                            <span>Company Name</span>
                            <span>Driver</span>
                            <span>Van Plate No.</span>
                            <span>No. of Passengers</span>
                        </div>

                        <div class="grid grid-cols-4 py-2 justify-between w-full">
                            <span class="font-medium text-sky-600">Personal Collection</span>
                            <span class="font-medium text-sky-600">Rizal Flores</span>
                            <span class="font-medium text-sky-600">DXX644</span>
                            <span class="font-medium text-sky-600">12</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold px-4 py-2 w-full">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Laguna to Naga</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">4:00AM</span>
                            <span class="font-medium text-sky-600">7:00AM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Naga to Legazpi</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">9:00AM</span>
                            <span class="font-medium text-sky-600">12:00PM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Legazpi to Sorsogon</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">1:00PM</span>
                            <span class="font-medium text-sky-600">3:00PM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Sorsogon to Laguna</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">5:00PM</span>
                            <span class="font-medium text-sky-600">10:00PM</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold px-4 pt-0 sm:pt-8 pb-4 w-full">
                    <span class="underline underline-offset-1 invisible">View Travel Info</span>
                    <a href="#" class="text-sky-600 hover:text-sky-400 underline underline-offset-1">View Travel Info</a>
                </div>
            </div>

            <!--passenger copy-->
            <div class="bg-white w-full">
                <span class="hidden md:flex absolute text-center text-neutral-600 opacity-30 font-black -rotate-45 mt-72 md:w-10/12 lg:w-7/12" style="font-size: 7rem;">Passenger Copy</span>
                <span class="md:hidden absolute text-center text-7xl text-neutral-600 opacity-30 font-black -rotate-45 mt-64 w-full">Passenger Copy</span>
                <div class="flex flex-row justify-between items-center font-bold pt-4 pb-2 w-full">
                    <div class="flex flex-row">
                        <span class="px-4">JVN Tracking</span>
                    </div>

                    <div class="flex flex-row divide-x-2 divide-black">
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Print</span>
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Download</span>
                        <span class="px-4 text-sky-600 hover:text-sky-400 underline underline-offset-1 cursor-pointer">Copy Ticket No.</span>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold py-2 w-full">
                    <div class="flex flex-row">
                        <span class="px-4">Date Issued:</span>
                        <span class="font-medium text-sky-600">15 Jun 2022</span>
                    </div>

                    <div class="flex flex-row px-4">
                        <span class="px-4">Ticket No:</span>
                        <span class="font-medium text-sky-600">123456abcde</span>
                    </div>
                </div>

                <div class="px-4 py-2 w-full">
                    <div class="flex flex-col items-center font-bold border-y border-black w-full gap-8">
                        <div class="grid grid-cols-4 py-2 justify-between w-full">
                            <span>Company Name</span>
                            <span>Driver</span>
                            <span>Van Plate No.</span>
                            <span>No. of Passengers</span>
                        </div>

                        <div class="grid grid-cols-4 py-2 justify-between w-full">
                            <span class="font-medium text-sky-600">Personal Collection</span>
                            <span class="font-medium text-sky-600">Rizal Flores</span>
                            <span class="font-medium text-sky-600">DXX644</span>
                            <span class="font-medium text-sky-600">12</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold px-4 py-2 w-full">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Laguna to Naga</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">4:00AM</span>
                            <span class="font-medium text-sky-600">7:00AM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Naga to Legazpi</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">9:00AM</span>
                            <span class="font-medium text-sky-600">12:00PM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Legazpi to Sorsogon</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="invisible row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">1:00PM</span>
                            <span class="font-medium text-sky-600">3:00PM</span>
                        </div>

                        <div class="flex flex-row pb-4">
                            <span class="text-xl">Trip Schedule from Sorsogon to Laguna</span>
                        </div>
                        <div class="grid grid-cols-4 grid-rows-4 w-full h-40">
                            <span>Day, Date</span>
                            <span>Departure</span>
                            <span>Arrival</span>
                            <div class="flex row-span-2 justify-end w-full h-20 sm:h-40">
                                <img src="{{asset('media/img/ticket-qr.png')}}" alt="qr-code">
                            </div>
                            <span class="font-medium text-sky-600">16 Jun 2022</span>
                            <span class="font-medium text-sky-600">5:00PM</span>
                            <span class="font-medium text-sky-600">10:00PM</span>
                        </div>
                    </div>
                </div>

                <div class="flex flex-row justify-between items-center font-bold px-4 pt-0 sm:pt-8 pb-4 w-full">
                    <span class="underline underline-offset-1 invisible">View Travel Info</span>
                    <a href="#" class="text-sky-600 hover:text-sky-400 underline underline-offset-1">View Travel Info</a>
                </div>
            </div>

            <div class="pt-20"></div>
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

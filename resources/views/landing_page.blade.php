<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JVN Tracking</title>
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
                @if(auth()->user())
                    <a href="#" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </a>
                    <a href="#" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                @else
                    <a href="{{route('login')}}" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us">Login</a>
                    <a href="{{route('register')}}" class="text-left text-neutral-200 hover:text-green-400 font-semibold" id="about-us">Sign Up</a>

                @endif
            </div>
        </div>
    </header>
    <!--header ends here-->

    <div class="flex flex-col justify-center items-center pt-20 w-full">
        <div class="flex flex-col justify-center items-center pt-2 w-full">
            <!--content-->
            <div class="flex justify-center items-center">
                <img src="{{asset('media/img/sample-6.png')}}" alt="samp">
            </div>

            <div class="px-4 py-2 mt-8 w-full">
                <div class="flex flex-row justify-center items-center px-4 py-2 dotted-bg rounded-md gap-2">
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
                            <input type="text" placeholder="Input Destination" id="destination" class="bg-neutral-200 focus:outline-none">
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
                        <span id="not-available" class="hidden py-1 text-center text-yellow-400 font-bold border border-yellow-500 rounded-md">Van Not Available</span>
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
                <a href="{{route('payment-options')}}" id="bookbtn" class="hidden text-center font-semibold px-4 py-2 text-neutral-200 bg-emerald-600 hover:bg-emerald-400 rounded-md w-1/12">Book</a>
            </div>
        </div>
    </div>

    <div class="flex justify-center items-center text-center w-full">
        <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
            Vertically centered modal
        </button>
    </div>

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="exampleModalCenter" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-dialog-centered relative w-auto pointer-events-none">
            <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalScrollableLabel">
                    Modal title
                    </h5>
                    <button type="button"
                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body relative p-4">
                    <p>This is a vertically centered modal.</p>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                    class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
                    data-bs-dismiss="modal">
                    Close
                    </button>
                    <button type="button"
                    class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
                    Save changes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="py-20"></div>
            <!--content ends here-->
</body>

<!--script-->
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRtsrdb3br7r1XNqRL2F-IGyDVCYw2S3k&libraries=places"></script>


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

    var origin = new google.maps.places.Autocomplete(document.getElementById('origin'))
    origin.setFields(['place_id', 'name', 'address_components', 'geometry'])
    origin.addListener('place_changed', function() {
        const place = origin.getPlace()
        const components = place.address_components
    })

    var destination = new google.maps.places.Autocomplete(document.getElementById('destination'))
    destination.setFields(['place_id', 'name', 'address_components', 'geometry'])
    destination.addListener('place_changed', function() {
        const place = destination   .getPlace()
        const components = place.address_components
    })

</script>
<!--script ends here-->
</html>

@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Home</title>
@endsection
@section('css')
@endsection
@section('content')
<!--content-->
<div class="flex flex-col pt-11 w-full">
    <div class="flex flex-col pt-11 w-full">
        <div id="carouselExampleIndicators" class="carousel slide carousel-dark relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4 z-[15]">
                <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="0"
                class="active bg-opacity-50"
                aria-current="true"
                aria-label="Slide 1"
                ></button>
                <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="1"
                aria-label="Slide 2"
                ></button>
                <button
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide-to="2"
                aria-label="Slide 3"
                ></button>
            </div>

            <img
                src="{{asset('media/img/1.png')}}"
                class="absolute top-0 w-full z-10"
                alt="frame"
            />

            <div class="carousel-inner relative w-full overflow-hidden ">
                <div class="carousel-item active float-left w-full">
                    <img
                        src="{{asset('media/img/2.png')}}"
                        class="block w-full"
                        alt="1"
                    />
                </div>
                <div class="carousel-item float-left w-full">
                    <img
                        src="{{asset('media/img/3.png')}}"
                        class="block w-full"
                        alt="2"
                    />
                </div>
                <div class="carousel-item float-left w-full">
                    <img
                        src="{{asset('media/img/4.png')}}"
                        class="block w-full"
                        alt="3"
                    />
                </div>
            </div>

            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0 z-[15]"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0 z-20"
                type="button"
                data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <div class="px-4 py-4 w-full">
            <div class="flex flex-col xl:flex-row justify-center items-start px-2 py-2 dotted-bg rounded-md gap-2 w-full">
                <div class="flex flex-col sm:flex-row justify-center items-start gap-2 w-full">
                    <div class="flex flex-col justify-center items-center gap-2 w-full"
                    id="route_container">
                        <div class="flex flex-col sm:flex-row justify-center items-center w-full sm:divide-x divide-emerald-600 gap-2 sm:gap-0">
                            <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">
                                <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Origin</label>
                                <input type="text" placeholder="Input Origin" id="origin" class="bg-neutral-200 focus:outline-none">
                            </div>

                            <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">
                                <div class="flex flex-row justify-between items-center">
                                    <label for="destination" class="text-left text-sm text-emerald-600 font-medium">Destination</label>
                                    <button onclick="addRoute()">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-emerald-600 hover:text-emerald-400" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                                <input type="text" placeholder="Input Destination" id="destination" class="bg-neutral-200 focus:outline-none">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">
                        <label for="no-of-passengers" class="text-left text-sm text-emerald-600 font-medium">No. of Passengers</label>
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
                </div>

                <div class="flex flex-col sm:flex-row justify-center items-start gap-2 w-full">
                    <div class="flex flex-col sm:flex-row justify-center items-center w-full sm:divide-x divide-emerald-600 gap-2 sm:gap-0">
                        <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">
                            <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Depart</label>
                            <input type="date" placeholder="MM/DD/YYYY" id="origin" class="bg-neutral-200 focus:outline-none">
                        </div>

                        <div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">
                            <label for="origin" class="text-left text-sm text-emerald-600 font-medium">Return</label>
                            <input type="date" placeholder="MM/DD/YYYY" id="origin" class="bg-neutral-200 focus:outline-none">
                        </div>
                    </div>

                    <div class="flex flex-col justify-center items-center py-4 px-4 bg-neutral-200 w-full sm:w-1/2">
                        <span id="van-available" class="invisible text-emerald-600 font-bold">Van Available</span>
                        <span id="not-available" class="hidden text-red-600 font-bold">Van Not Available</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 justify-center px-4 py-2 w-full gap-x-8 xl:gap-x-16" id="pax_info_container">
            <!-- <div class="flex flex-row gap-3 w-1/2">
                <input type="text" placeholder="Passenger" id="passenger" class="px-4 py-2 border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">
                <input type="text" placeholder="Pick-up Point" id="passenger" class="px-4 py-2 border border-emerald-600 bg-neutral-200 focus:outline-none rounded-md">
            </div> -->
        </div>

        <div class="flex items-center justify-end px-4 py-2 mt-6 w-full">
            <a href="{{route('payment-options')}}" id="bookbtn" class="hidden text-center font-semibold px-4 py-2 text-white bg-emerald-600 hover:bg-emerald-400 rounded-md w-2/12 md:w-1/12">Book</a>
        </div>
    </div>
</div>
<!--content ends here-->
@endsection

@section('js')
<!--script-->
<script>
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

    function addRoute() {
        $('#route_container').prepend('<div class="hidden" id="route">' +
            '<div class="flex flex-col sm:flex-row justify-center items-center w-full sm:divide-x divide-emerald-600 gap-2 sm:gap-0">' +
                '<div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">' +
                    '<label for="origin" class="text-left text-sm text-emerald-600 font-medium">Origin</label>' +
                    '<input type="text" placeholder="Input Origin" id="origin" class="bg-neutral-200 focus:outline-none">' +
                '</div>' +
                '<div class="flex flex-col px-2 py-1 bg-neutral-200 gap-1 w-full sm:w-1/2">' +
                    '<div class="flex flex-row justify-between items-center">' +
                        '<label for="destination" class="text-left text-sm text-emerald-600 font-medium">Destination</label>' +
                        '<button onclick="removeRoute()">' +
                            '<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-600 hover:text-red-400" viewBox="0 0 20 20" fill="currentColor">' +
                                '<path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />' +
                            '</svg>' +
                        '</button>' +
                    '</div>' +
                    '<input type="text" placeholder="Input Destination" id="destination" class="bg-neutral-200 focus:outline-none">' +
                '</div>' +
            '</div>' +
        '</div>');

        $("#route").show('fast');
    }

    function removeRoute() {
        $("#route").hide('fast', function(){ $("#route").remove(); });
    }

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
@endsection
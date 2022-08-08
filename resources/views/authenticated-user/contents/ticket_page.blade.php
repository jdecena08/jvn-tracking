@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Tickets</title>
@endsection
@section('css')
@endsection
@section('content')
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
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#transaction").css('color', '#4ade80');
    });
</script>
<!--script ends here-->
@endsection
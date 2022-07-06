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
<body class="flex flex-row justify-center items-center diagonal-bg w-full h-full scroll-smooth">
    <!--content-->
    <div class="flex justify-center items-center w-full h-full">
        <nav class="flex-1 px-2 justify-left items-center text-center w-64 dotted-bg shadow-md divide-y divide-neutral-200 h-screen fixed left-0 top-0">
            <div class="flex justify-between px-4 py-6 items-center text-xl font-semibold text-neutral-200 gap-3">
                <div>{{config('app.name')}}</div>
                <div><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg></div>
            </div>

            <div class="py-4">
                <a href="#" class="flex px-4  py-2 justify-left items-center text-base font-semibold text-neutral-200 gap-3 w-full" id="user"><svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                </svg> User Profile</a>
            </div>

            <div class="flex flex-col pt-2 gap-2 w-full">
                <a href="{{route('admin-dashboard')}}" class="flex px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="vehicle-tracking"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                </svg> Vehicle Tracking</a>

                <a href="{{route('driver-management')}}" class="flex px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="driver-management"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                </svg> Driver Management</a>

                <a href="{{route('vehicle-management')}}" class="flex px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="vehicle-management"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                    <path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z" />
                </svg> Vehicle Management</a>

                <a href="{{route('trip-tickets')}}" class="flex px-4 py-2 justify-left items-center text-base font-semibold text-neutral-200 hover:bg-green-400 hover:bg-opacity-25 rounded-md gap-3 w-full" id="trip-tickets"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M2 6a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 100 4v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2a2 2 0 100-4V6z" />
                </svg> Trip Tickets</a>
            </div>
        </nav>

        <div class="flex flex-col justify-center items-center ml-64 w-full h-full">

            <div class="flex flex-col justify-center items-center mt-8 w-3/4 gap-4">
                <table class="text-center font-medium w-full">
                    <thead>
                        <tr class="dotted-bg text-neutral-200">
                            <th class="px-2 py-1 rounded-tl-lg">Vehicle Type</th>
                            <th class="px-2 py-1">Plate Number</th>
                            <th class="px-2 py-1">Status</th>
                            <th class="px-2 py-1 rounded-tr-lg">Trip Number</th>
                        </tr>
                    </thead>

                    <tbody class="text-neutral-900 bg-white divide-y divide-emerald-600">

                        <tr>
                            <td class="px-2 py-1">Van</td>
                            <td class="px-2 py-1">NCM4336</td>
                            <td class="px-2 py-1 text-green-600" id="table-availability">Available</td>
                            <td class="px-2 py-1">
                                <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1"></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-1">Van</td>
                            <td class="px-2 py-1">NCM4337</td>
                            <td class="px-2 py-1 text-green-600" id="table-availability">Available</td>
                            <td class="px-2 py-1">
                                <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1"></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-1">Van</td>
                            <td class="px-2 py-1">NCM4338</td>
                            <td class="px-2 py-1 text-green-600" id="table-availability">Available</td>
                            <td class="px-2 py-1">
                                <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1"></a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-1">Van</td>
                            <td class="px-2 py-1">NCM4339</td>
                            <td class="px-2 py-1 text-blue-600" id="table-availability">Ongoing</td>
                            <td class="px-2 py-1">
                                <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View</a>
                            </td>
                        </tr>

                        <tr>
                            <td class="px-2 py-1 rounded-bl-lg">Van</td>
                            <td class="px-2 py-1">NCM4340</td>
                            <td class="px-2 py-1 text-green-600" id="table-availability">Available</td>
                            <td class="px-2 py-1 rounded-br-lg">
                                <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1"></a>
                            </td>
                        </tr>

                    </tbody>
                </table>

                <div class="pt-96"></div>
            </div>
        </div>
    </div>
    <!--content ends here-->
</body>

<!--script-->
<script src="https://cdn.tailwindcss.com"></script>

<script>
    jQuery(document).ready(function() {
        $("#vehicle-management").css('background-color', '#4ade80');
    });

</script>
<!--script ends here-->
</html>

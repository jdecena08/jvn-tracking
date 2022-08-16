@extends('admin.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Trip Tickets</title>
@endsection
@section('css')
@endsection
@section('content')
<!--content-->
<div class="flex flex-col justify-center items-center w-full h-full">
    <div class="flex flex-col justify-center items-center mt-8 w-3/4 gap-4">
        <table class="text-center font-medium w-full">
            <thead>
                <tr class="dotted-bg text-neutral-200">
                    <th class="px-2 py-1 rounded-tl-lg">Date Issued</th>
                    <th class="px-2 py-1">Ticket Number</th>
                    <th class="px-2 py-1">Tricket</th>
                    <th rowspan="2" class="px-2 py-1 w-2/12">Travel Information</th>
                    <th class="px-2 py-1 rounded-tr-lg">Status</th>
                </tr>
            </thead>

            <tbody class="text-neutral-900 bg-white divide-y divide-emerald-600">
                <tr>
                    <td class="px-2 py-1">15 Jun 2022</td>
                    <td class="px-2 py-1">123456abcdef</td>
                    <td>
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                    </td>
                    <td class="px-2 py-1">
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                    </td>
                    <td class="px-2 py-1 text-green-600">Completed</td>
                </tr>

                <tr>
                    <td class="px-2 py-1">17 Jun 2022</td>
                    <td class="px-2 py-1">321654dbafed</td>
                    <td>
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                    </td>
                    <td class="px-2 py-1">
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                    </td>
                    <td class="px-2 py-1 text-blue-600">Dispatched</td>
                </tr>

                <tr>
                    <td class="px-2 py-1">23 Jun 2022</td>
                    <td class="px-2 py-1">456123defabc</td>
                    <td>
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                    </td>
                    <td class="px-2 py-1">
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                    </td>
                    <td class="px-2 py-1 text-orange-400">Reserved</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 rounded-bl-lg">29 Jun 2022</td>
                    <td class="px-2 py-1">654321fedcba</td>
                    <td>
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                    </td>
                    <td class="px-2 py-1">
                        <a href="#" id="table-trip-number" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                    </td>
                    <td class="px-2 py-1 text-red-600 rounded-br-lg">Cancelled</td>
                </tr>

            </tbody>
        </table>
    </div>
</div>
<!--content ends here-->
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#trip-tickets").css('background-color', '#4ade80');
    });

</script>
<!--script ends here-->
@endsection
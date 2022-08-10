@extends('admin.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Vehicle Management</title>
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

    </div>
</div>
<!--content ends here-->
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#vehicle-management").css('background-color', '#4ade80');
    });

</script>
<!--script ends here-->
@endsection
@extends('admin.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Driver Management</title>
@endsection
@section('css')
@endsection
@section('content')
<!--content-->
<div class="flex flex-col justify-center items-center w-full h-full">
    <div class="flex flex-col justify-center items-center mt-8 w-3/4 gap-4">
        <table class="text-center font-medium w-3/4">
            <thead>
                <tr class="dotted-bg text-neutral-200">
                    <th class="px-2 py-1 rounded-tl-lg">Name</th>
                    <th class="px-2 py-1 w-2/12">License</th>
                    <th class="px-2 py-1 w-2/12">OR/CR</th>
                    <th rowspan="2" class="px-2 py-1 w-2/12">Medical Certificate</th>
                    <th class="px-2 py-1 rounded-tr-lg w-2/12">Insurance</th>
                </tr>
            </thead>

            <tbody class="text-neutral-900 bg-white divide-y divide-emerald-600">
                <tr>
                    <td class="px-2 py-1 text-blue-600 hover:text-blue-400 underline underline-offset-1" id="table-name">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">Pepon Marave</a>
                    </td>
                    <td class="px-2 py-1 text-green-600" id="table-license">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-or-cr">Submitted</td>
                    <td class="px-2 py-1 text-red-600" id="table-med-cert">Pending</td>
                    <td class="px-2 py-1 text-green-600" id="table-insurance">Submitted</td>
                </tr>

                <tr>
                    <td class="px-2 py-1" id="table-name">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">Marlon Atanacio</a>
                    </td>
                    <td class="px-2 py-1 text-green-600" id="table-license">Submitted</td>
                    <td class="px-2 py-1 text-red-600" id="table-med-cert">Pending</td>
                    <td class="px-2 py-1 text-green-600" id="table-or-cr">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-insurance">Submitted</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 text-blue-600 hover:text-blue-400 underline underline-offset-1" id="table-name">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">Richard Diozon</a>
                    </td>
                    <td class="px-2 py-1 text-green-600" id="table-license">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-or-cr">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-insurance">Submitted</td>
                    <td class="px-2 py-1 text-red-600" id="table-med-cert">Pending</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 text-blue-600 hover:text-blue-400 underline underline-offset-1" id="table-name">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">Tyson Sy</a>
                    </td>
                    <td class="px-2 py-1 text-red-600" id="table-med-cert">Pending</td>
                    <td class="px-2 py-1 text-green-600" id="table-license">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-or-cr">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-insurance">Submitted</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 rounded-bl-lg text-blue-600 hover:text-blue-400 underline underline-offset-1" id="table-name">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">Dado Pena</a>
                    </td>
                    <td class="px-2 py-1 text-green-600" id="table-license">Submitted</td>
                    <td class="px-2 py-1 text-green-600" id="table-or-cr">Submitted</td>
                    <td class="px-2 py-1 text-red-600" id="table-med-cert">Pending</td>
                    <td class="px-2 py-1 rounded-br-lg text-green-600" id="table-insurance">Submitted</td>
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
        $("#driver-management").css('background-color', '#4ade80');
    });
</script>
<!--script ends here-->
@endsection
@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Transaction History</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-3/4 gap-8">
        <!--content-->
        <div class="pt-20"></div>

        <table class="text-center font-medium border border-emerald-700 w-full">
            <thead>
                <tr class="dotted-bg text-neutral-200">
                    <th class="px-2 py-1 border border-emerald-700">Date Issued</th>
                    <th class="px-2 py-1 border border-emerald-700">Ticket Number</th>
                    <th class="px-2 py-1 border border-emerald-700">Ticket</th>
                    <th class="px-2 py-1 border border-emerald-700">Travel Info</th>
                </tr>
            </thead>

            <tbody class="text-neutral-900 bg-neutral-200">
                <tr>
                    <td class="px-2 py-1 border border-emerald-700">15 Jun 2022</td>
                    <td class="px-2 py-1 border border-emerald-700">123456abcde</td>
                    <td class="px-2 py-1 border border-emerald-700">
                        <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>
                    </td>
                    <td class="px-2 py-1 border border-emerald-700">
                        <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                    </td>
                </tr>

                <tr>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                </tr>

                <tr>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                    <td class="px-2 py-1 border border-emerald-700">-</td>
                </tr>
            </tbody>
        </table>
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
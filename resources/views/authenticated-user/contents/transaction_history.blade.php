@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Transaction History</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-11/12 md:w-3/4 gap-8">
        <!--content-->
        <div class="flex flex-col items-center text-left text-sm md:text-base gap-2 w-full h-full border bg-white border-emerald-600 rounded-lg shadow">
            <div class="grid grid-cols-4 justify-center items-center text-center md:px-4 py-2 w-full font-semibold text-sm md:text-lg text-white dotted-bg rounded-t-md">
                <span>Date Issued</span>
                <span>Ticket Number</span>
                <span>Ticket</span>
                <span>Travel Info</span>
            </div>
            
            <div class="flex flex-col justify-between items-center md:px-4 pb-2 gap-4 w-full">
                <div class="grid grid-cols-4 justify-center items-center text-center w-full"
                id="duplicate-this-by-id">
                    <span id="payment-date" class="font-medium">15 Jun 2022</span>

                    <span id="ticket-number" class="font-medium">123456abcde</span>

                    <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>

                    <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                </div>

                <div class="grid grid-cols-4 justify-center items-center text-center w-full">
                    <span id="payment-date" class="font-medium">15 Jun 2022</span>

                    <span id="ticket-number" class="font-medium">123456abcde</span>

                    <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>

                    <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                </div>

                <div class="grid grid-cols-4 justify-center items-center text-center w-full">
                    <span id="payment-date" class="font-medium">15 Jun 2022</span>

                    <span id="ticket-number" class="font-medium">123456abcde</span>

                    <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>

                    <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                </div>

                <div class="grid grid-cols-4 justify-center items-center text-center w-full">
                    <span id="payment-date" class="font-medium">15 Jun 2022</span>

                    <span id="ticket-number" class="font-medium">123456abcde</span>

                    <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>

                    <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                </div>

                <div class="grid grid-cols-4 justify-center items-center text-center w-full">
                    <span id="payment-date" class="font-medium">15 Jun 2022</span>

                    <span id="ticket-number" class="font-medium">123456abcde</span>

                    <a href="{{route('ticket-page')}}" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Ticket</a>

                    <a href="#" class="text-blue-600 hover:text-blue-400 underline underline-offset-1">View Travel Info</a>
                </div>
            </div>
        </div>

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
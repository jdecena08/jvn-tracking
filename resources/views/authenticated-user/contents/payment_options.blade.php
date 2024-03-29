@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Payment</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-11/12 md:w-3/4 gap-8">
        <!--content-->
        <div class="flex flex-col justify-center items-center text-center w-full gap-2">
            <span class="text-base font-semibold">Amount to pay</span>
            <span class="text-3xl font-bold text-emerald-600">300php</span>
        </div>

        <div class="flex flex-col sm:flex-row justify-center items-center text-center w-full gap-4">
            <button class="w-8/12 sm:w-3/12 hover:opacity-90">
                <img class="rounded-md" src="{{asset('media/img/payment-gcash.png')}}" alt="gcash">
            </button>
            <button class="w-8/12 sm:w-3/12 hover:opacity-90">
                <img class="rounded-md" src="{{asset('media/img/payment-paymaya.png')}}" alt="paymaya">
            </button>
            <button class="w-8/12 sm:w-3/12 hover:opacity-90">
                <img class="rounded-md" src="{{asset('media/img/payment-coinsph.png')}}" alt="coinsph">
            </button>
        </div>
        <!--content ends here-->
    </div>
</div>
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#book").css('color', '#4ade80');
    });
</script>
<!--script ends here-->
@endsection
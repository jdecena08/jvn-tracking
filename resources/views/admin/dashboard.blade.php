@extends('admin.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - Dashboard</title>
@endsection
@section('css')
@endsection
@section('content')
<!--content-->
<div class="flex flex-col justify-center items-center w-full">
    <div class="flex flex-col justify-center items-center mt-8 w-3/4 gap-4">
        <div class="flex flex-row justify-center items-center px-4 py-2 text-neutral-800 w-full gap-4">
            <input type="text" id="ticket-no" placeholder="Input Ticket Number" class="px-4 py-2 border border-emerald-600 rounded-md focus:outline-none">

            <button class="px-4 py-2 text-center text-neutral-200 font-semibold bg-emerald-600 hover:bg-emerald-400 rounded-md w-1/12">Track</button>
        </div>

        <div class="flex justify-center items-center w-full">
            <div id="map" class="w-full mx-1 border-2 border-gray-300" style="height: 500px"></div>
        </div>

    </div>
</div>
<!--content ends here-->
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#vehicle-tracking").css('background-color', '#4ade80');
    });

    var mymap = new GMaps({
      el: '#map',
      lat: 14.1416642,
      lng: 121.218359,
      zoom:12
    });
</script>
<!--script ends here-->
@endsection
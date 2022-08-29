@extends('authenticated-user.components.layout')
@section('page-title')
<title>{{config('app.name')}} - Track & Trace</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-11/12 md:w-3/4 gap-6">
        <!--content-->
        <div class="flex flex-row justify-center items-center px-2 text-neutral-800 w-full md:w-2/3 lg:w-1/2 gap-4">
            <input type="text" id="ticket_no" placeholder="Input Ticket Number" class="px-4 py-2 border border-emerald-600 rounded-md focus:outline-none w-full">

            <button class="px-4 py-2 text-center text-neutral-200 font-semibold bg-emerald-600 hover:bg-emerald-400 rounded-md w-28" onclick="beginTracking()">Track</button>
        </div>

        <div class="flex justify-center items-center w-full">
            <div id="map" class="w-full mx-1 border-2 border-neutral-200" style="height: 600px"></div>
        </div>

        <div class="py-20"></div>
        <!--content ends here-->
    </div>
</div>
@endsection

@section('js')
<!--script-->
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
    $(document).ready(function() {
        $("#track-trace").css('color', '#4ade80');
    });

    var x = new google.maps.LatLng(14.1416642,121.218359)
    var mapOptions = {
        zoom: 13,
        center: x
    }

    var map = new google.maps.Map(document.getElementById('map'), mapOptions);

    function beginTracking()
    {
        var plate = $('#ticket_no').val()
        console.log(plate)
            var url = "{{route('test-data')}}"

            setInterval(() => {
                axios.get(url, {
                    plate_num : plate
                }).then((response) => {
                    var latitude = response.data[0]
                    var longitude = response.data[1]

                    const latlng = {lat: latitude, lng: longitude}
                    const img = "{{asset('media/img/shuttle.png')}}";
                    const past_img = "{{asset('media/img/circle.png')}}";
                    marker = new google.maps.Marker({
                        position: latlng,
                        tite: 'ZPU662',
                        icon: img
                    })

                    marker.setMap(map)

                    setTimeout(() => {
                        past = new google.maps.Marker({
                            position: latlng,
                            icon: past_img
                        })
                        past.setMap(map)
                        marker.setMap(null)
                    }, 3000)

                }).catch((error) => {
                    console.log(error.response.data)
                })
            }, 5000);

    }

</script>
<!--script ends here-->
@endsection

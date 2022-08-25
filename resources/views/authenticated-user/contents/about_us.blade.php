@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - About Us</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-11/12 md:w-3/4 gap-8">
        <!--content-->
        <img src="{{asset('media/img/sample-5.png')}}" alt="vans" class="w-full">

        <div>
            <p>Joint Venture National (JVN) offers a variety of services including web and application developing. JVN Tracking, one of JVN's byproducts, offers vehicle tracking services especially for Tour Agencies where they can track the JVN's van for hire—for them and their clients to know where the van/s are.</p>
        </div>

        <div>
            <p>JVN was founded on 2017 and established on the same year. JVN strived developing websites, developing applications, and offering other services which made them more sufficient and reliable in this kind of job. JVN developed a lot of websites locally even internationally. JVN always giving all their knowledge and skills to reach and even exceed the clients expectations.</p>
        </div>
        <!--content ends here-->
    </div>
</div>
@endsection

@section('js')
<!--script-->
<script>
    jQuery(document).ready(function() {
        $("#about-us").css('color', '#4ade80');
    });
</script>
<!--script ends here-->
@endsection
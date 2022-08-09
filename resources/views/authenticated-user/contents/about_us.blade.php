@extends('authenticated-user.components.layout')
@section('page-title')
    <title>{{config('app.name')}} - About Us</title>
@endsection
@section('css')
@endsection
@section('content')
<div class="flex flex-col justify-center items-center pt-20 w-full">
    <div class="flex flex-col justify-center items-center pt-10 w-3/4 gap-8">
        <!--content-->
        <img src="{{asset('media/img/sample-5.png')}}" alt="vans" class="w-full">

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure!</p>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure!</p>
        </div>

        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure! Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore, minus. Consequatur, eligendi cupiditate? Consectetur, cupiditate fugiat nesciunt, veniam, commodi distinctio iusto sapiente molestias odit eligendi eos quae dolorem amet iure!</p>
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
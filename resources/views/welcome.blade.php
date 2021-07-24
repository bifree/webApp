@extends('layouts.app')

@section('content')

    <div class="center jumbotron green">

        <div class="text-center text-white green">
            <h1>Bifree Application</h1>
        </div>

    </div>
    
    <div class="text-right">

        @if(Auth::check())
            ようこそ{{ Auth::user()->name }}さん
        @endif

    </div>
    
    <div class="container text-center main">
        <img src="https://dssintlsas.akamaized.net/artwork/Simpsons_Docomo_1920x1080_JPN-5ec71d7ccb08aaf16dc5e37c.png">
    </div>

@endsection
@extends('templates.mainTemplate')
@section('title', 'Contact Us')
@section('content')

    <div class="container w-50">
        <h1 class="text-center"><span class="text-decoration-underline text-danger">{{$contactData['name']}}</span>, you contacted us!</h1>
        <div class="m-2 p-3 border border-secondary bg-dark">
            <p style="font-size: 18px; color: #999"" class="text-decoration-underline" >Message:</p>
            <p class="text-primary">{{$contactData['msg']}}</p>
        </div>
        <p class="font-monospace" style="letter-spacing: 2px; font-size: 10px; color: #999">From: <span class="text-uppercase">{{$contactData['mail']}}</span></p>
    </div>

@endsection

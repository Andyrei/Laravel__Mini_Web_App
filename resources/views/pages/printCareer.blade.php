@extends('templates.mainTemplate')
@section('title', 'Printed Career')
@section('content')

    <h1 class="text-center">WORK WITH US!</h1>
    @php
        print_r($careerData)
    @endphp

@endsection

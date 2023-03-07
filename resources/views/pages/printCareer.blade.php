@extends('templates.mainTemplate')
@section('title', 'Printed Career')
@section('content')

    <h1 class="text-center"><span class="text-decoration-underline text-danger">{{$careerData['name']}}</span>, have a career with us!</h1>
    <h6 class="text-decoration-underline" style="color: #999">Details you sent : </h6>
    <div class="d-flex justify-content-between p-2 my-1 bg-secondary"><span>Name: </span> {{$careerData['name']}}</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-light text-dark"><span>Surname: </span> {{$careerData['surname']}}</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-secondary"><span>Birth Date: </span> {{$careerData['birth']}}</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-light text-dark"><span>Gender: </span> {{$careerData['gender']}}</div>
    <div class="d-flex justify-content-between p-1 my-1 bg-secondary">
        @if($careerData['javascript']) <div class="p-1 px-2 bg-dark text-warning rounded-3"> JavaScript </div> @endif
        @if($careerData['java'])<div class="p-1 px-2 bg-dark text-warning rounded-3">Java</div> @endif
        @if($careerData['php'])<div class="p-1 px-2 bg-dark text-warning rounded-3">PHP</div> @endif
        @if($careerData['python'])<div class="p-1 px-2 bg-dark text-warning rounded-3">Python</div> @endif
        @if($careerData['flutter'])<div class="p-1 px-2 bg-dark text-warning rounded-3">Flutter</div> @endif
    </div>
    <div class="d-flex justify-content-between p-2 my-1 bg-light text-dark"><span>Adress: </span> {{$careerData['adress']}}</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-secondary"><span>City: </span> {{$careerData['city']}}</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-light text-dark"><span>Message: </span> "{{$careerData['msg']}}"</div>
    <div class="d-flex justify-content-between p-2 my-1 bg-secondary"><a href="{{$careerData['cv']}}" download="curriculum" target="_blank">Curriculum: </a> {{$careerData['cv']}}</div>

@endsection

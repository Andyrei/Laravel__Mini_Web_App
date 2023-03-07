@extends('templates.mainTemplate')
@section('title', 'Contact Us')
@section('content')

  <h1 class="text-center my-5">Contact us</h1>
  <div class="position-absolute top-0">
      @error('name')<p class="alert alert-danger">{{$message}}</p>@enderror
      @error('mail')<p class="alert alert-danger">{{$message}}</p>@enderror
      @error('msg')<p class="alert alert-danger">{{$message}}</p>@enderror
  </div>
  <form method="POST" action="print-contact" enctype="multipart/form-data" class="w-50 mx-auto">
    @csrf
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-floating mb-3">
			<input type="text" id="name" name="name" placeholder="Name" value="{{ old('name') }}" class="form-control text-white-50 @error('name') is-invalid @enderror">
			<label for="name">Name</label>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="form-floating mb-3">
          <input type="mail" id="mail" name="mail" placeholder="mail@example.com" class="form-control text-white-50 @error('mail') is-invalid @enderror">
          <label for="mail" class="form-label">Mail</label>
        </div>
      </div>
    </div>
    <div class="form-floating">
      <textarea  id="floatingTextarea2" name="msg" placeholder="Leave a comment here" class="form-control text-white-50 @error('msg') is-invalid @enderror" style="height: 100px">{{ old('msg') }}</textarea>
      <label for="floatingTextarea2">Message</label>
    </div>
    <button type="submit" class="btn bg-danger text-white w-100 my-5">Submit</button>
  </form>
  @endsection

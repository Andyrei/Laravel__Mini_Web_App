@extends('templates.mainTemplate')
@section('title', 'Contact Us')
@section('content')

  <h1 class="text-center my-5">Contact us</h1>
  <form method="POST" action="print-contact" enctype="multipart/form-data" class="w-50 mx-auto">
    @csrf
    <div class="row">
      <div class="col-12 col-md-6">
        <div class="form-floating mb-3">
          <input type="text" id="name" name="name" placeholder="Name" required value="Andy" class="form-control text-white-50">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="col-12 col-md-6">
        <div class="form-floating mb-3">
          <input type="mail" id="mail" name="mail" placeholder="mail@example.com" required value="mail@mail.com" class="form-control text-white-50">
          <label for="mail" class="form-label">Mail</label>
        </div>
      </div>
    </div>
    <div class="form-floating">
      <textarea  id="floatingTextarea2" name="msg" placeholder="Leave a comment here" required class="form-control text-white-50" style="height: 100px"> Message of what I want to write </textarea>
      <label for="floatingTextarea2">Message</label>
    </div>
    <button type="submit" class="btn bg-danger text-white w-100 my-5">Submit</button>
  </form>

  @endsection

@extends('templates.mainTemplate')
@section('title', 'Career')
@section('content')


  <h1 class="text-center my-5">Career</h1>
  <form method="POST" action="print-career" enctype="multipart/form-data" class="w-75 mx-auto d-flex flex-column gap-2">
    @csrf
    {{-- NAME / SURNAME --}}
    <div class="row">
      <div class="col-md-6">
        <div class="form-floating mb-3">
          <input type="text" class="form-control text-white-50" id="name" name="name" placeholder="name">
          <label for="name">Name</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control text-white-50" id="surname" name="surname" placeholder="surname">
          <label for="surname">Surname</label>
        </div>
      </div>
    </div>
    {{-- BIRTH / GENDER --}}
    <div class="row mt-3 mb-3">
      <div class="col-md-6">
        <p>Birth Date</p>
        <div class="input-group">
          <input type="date" id="birth" name="birth" placeholder="birthDate" class="form-control text-white-50">
        </div>
      </div>
      <div class="col-md-6">
        <p>Gender</p>
        <div class="form-check d-flex justify-content-around">
          <input type="radio" class="btn-check d-none" id="non_binary" name="gender" value="non-binary">
          <label class="btn btn-outline-danger mx-2" for="non_binary">Non-Binary</label>

          <input type="radio" class="btn-check d-none" id="female" name="gender" value="female">
          <label class="btn btn-outline-danger mx-2" for="female">Female</label>

          <input type="radio" class="btn-check d-none" id="male" name="gender" value="male">
          <label class="btn btn-outline-danger mx-2" for="male">Male</label>

          <input type="radio" class="btn-check d-none" id="none" name="gender" value="none" checked>
            <label class="btn btn-outline-danger mx-2" for="none">No answer</label>
        </div>
      </div>
    </div>
    {{-- LANGUAGES --}}
    <div class="row">
      <div class="col">
        <p>What language do you prefer?</p>
        <div class="w-100 d-flex flex-wrap justify-content-around">
            <input type="checkbox" class="btn-check" id="javascript" name="javascript" autocomplete="off">
            <label for="javascript" class="btn btn-outline-warning">Javascript</label>

            <input type="checkbox" class="btn-check" id="php" name="php" autocomplete="off">
            <label for="php" class="btn btn-outline-warning">PHP</label>

            <input type="checkbox" class="btn-check" id="java" name="java" autocomplete="off">
            <label for="java" class="btn btn-outline-warning">Java</label>

            <input type="checkbox" class="btn-check" id="python" name="python" autocomplete="off">
            <label for="python" class="btn btn-outline-warning">Python</label>

            <input type="checkbox" class="btn-check" id="flutter" name="flutter" autocomplete="off">
            <label for="flutter" class="btn btn-outline-warning">Flutter</label>
        </div>
      </div>
    </div>
    {{-- ADRESS / CITY / MSG--}}
    <div class="row mt-4 gap-3 gap-md-0">
        {{-- ADRESS --}}
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" id="adress" name="adress" placeholder="adress" class="form-control text-white-50">
          <label for="adress">Adress</label>
        </div>
      </div>
      {{-- CITY --}}
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" id="city" name="city" placeholder="city" class="form-control text-white-50">
          <label for="city">City</label>
        </div>
      </div>
      {{-- TEXTAREA --}}
      <div class="col-12 mt-md-3">
        <div class="form-floating">
          <textarea name="msg" id="floatingTextarea2" placeholder="Leave a comment here" class="form-control text-white-50" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Comments</label>
        </div>
      </div>
    </div>
    {{-- FILE UPLOAD --}}
    <div class="row mt-5">
      <div class="col">
          <label for="formFileLg" class="form-label">Insert here your CV in .pdf (max: 5mb)</label>
          <input type="file" id="formFileLg" name="cv" accept="pdf" class="form-control form-control-lg text-light">
      </div>
    </div>
    <button type="submit" class="my-5 btn w-100 btn-danger">Candidate</button>
  </form>
</main>


@endsection

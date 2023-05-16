<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="{{url('/')}}/register" method="post">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all())
        @endphp
        </pre> --}}
        @php
         $demo =1   
        @endphp
<div class="container">
    <h1 class="text-center">Registration</h1>
    <x-input type="text" name="name" label="Name" :demo="$demo"/>
    <x-input type="email" name="email" label="Email"/>
    <x-input type="password" name="password" label="Password"/>
    <x-input type="password" name="password_confimation" label="Confirm Password"/>
    

    {{-- <div class="form-group">
      <label for="" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="nameId" placeholder="Full name" value="{{old('name')}}">
      <span class="text-danger">
        @error('name')
            {{$message}}
        @enderror
      </span>
    </div> --}}
    {{-- <div class="form-group">
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailId" placeholder="Email">
      <span class="text-danger">
        @error('email')
        {{$message}}  
        @enderror
      </span>
    </div> --}}
    {{-- <div class="form-group">
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="" aria-describedby="passwordId" placeholder="Password">
      <span class="text-danger">
        @error('password')
        {{$message}}     
        @enderror
      </span>
    </div>
      <div class="form-group">
      <label for="" class="form-label">Confirm Password</label>
      <input type="password" class="form-control" name="password_confimation" id="" aria-describedby="confirmPasswordId" placeholder="Confirm Password">
      <span class="text-danger">
        @error('confirmPassword')
        {{$message}}
        @enderror
      </span>
    </div> --}}
    <button class="btn btn-primary" style="margin-top:10px">
        Submit
    </button>
</div>
</form>
</body>

</html>
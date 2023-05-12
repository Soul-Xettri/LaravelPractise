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
<div class="container">
    <h1 class="text-center">Registration</h1>
    <div class="mb-3">
      <label for="" class="form-label">Name</label>
      <input type="text" class="form-control" name="name" id="" aria-describedby="nameId" placeholder="Full name">
      {{-- <small id="nameId" class="form-text text-muted">Help text</small> --}}
      <label for="" class="form-label">Email</label>
      <input type="email" class="form-control" name="email" id="" aria-describedby="emailId" placeholder="Email">
      {{-- <small id="emailId" class="form-text text-muted">Help text</small> --}}
      <label for="" class="form-label">Password</label>
      <input type="password" class="form-control" name="password" id="" aria-describedby="passwordId" placeholder="Password">
      {{-- <small id="PasswordId" class="form-text text-muted">Help text</small> --}}
    </div>
    <button class="btn btn-primary">
        Submit
    </button>
</div>
</form>
</body>

</html>
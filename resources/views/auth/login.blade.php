<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Time control</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="{{ url('css/login.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body class="login-page">
<!--Page Container Start Here-->
<section class="login-container">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">

     @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

      <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title"><strong>Sign In </strong></h3></div>
    <form method="POST" action="/auth/login">
    <div class="panel-body">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div>
      <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
        <input type="password" id="password" name="password" class="form-control">
    </div>

    <div class="form-group">
        <input type="checkbox" name="remember"> Remember Me
    </div>
 </div>
 <div class="panel-footer">
     <button type="submit" class="btn btn-sm btn-primary">Login</button>
 </div>
</form>
</div>
</div>
</div>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js" type="text/javascript"></script>

</body>
</html>

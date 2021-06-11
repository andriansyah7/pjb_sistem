<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="{{asset('adminLTE')}}/dist/img/listrik4.png" >
  <title>PJB | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminLTE/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<img width="100%" src="{{asset('adminLTE')}}/dist/img/SOAppsNobg.png" />
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg"></p>

      <form action="{{route('postlogin')}}" method="post">
        {{ csrf_field() }}
        <div class="input-group mb-3">
          <input type="text" class="form-control @error('user_nid') is-invalid @enderror" name="user_nid" placeholder="NID">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
          @error('user_nid') <div class="invalid-feedback"> {{$message}} </div> @enderror
        </div>

        <div class="input-group mb-3">
          <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
          @error('user_nid') <div class="invalid-feedback"> {{$message}} </div> @enderror
        </div>
        
        <div class="row">
          <div class="col-8">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

@include('sweetalert::alert')
<!-- jQuery -->
@include('Template.script')
</body>
</html>

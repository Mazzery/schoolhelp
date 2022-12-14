
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SchoolHELP | Volunteer Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="assets/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/AdminLTE/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="assets/AdminLTE/index2.html">School<b>HELP</b></a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register As a Volunteer</p>

      <form method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Username" id=username name="username" value="{{ old('username') }}" required autocomplete="username" @error('username') is-invalid @enderror name="username" value="{{ old('name') }}" required autocomplete="username" autofocus>
          @error('fullname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full Name" id=fullname @error('fullname') is-invalid @enderror name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>
          @error('fullname')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
              
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="E-mail Address" id=email  @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text"> 
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Phone Number" id=phone_number  @error('phone_number') is-invalid @enderror name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>
          @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="date" class="form-control" placeholder="Date Of Birth" id=date_of_birth  @error('date_of_birth') is-invalid @enderror name="date_of_birth" value="{{ old('date_of_birth') }}" required autocomplete="date_of_birth">
          @error('date_of_birth')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>

    
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Occupation" id=occupation  @error('occupation') is-invalid @enderror name="occupation" value="{{ old('occupation') }}" required autocomplete="occupation" autofocus>
          @error('occupation')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        
        <div class="container mx-10 text-center",>
          <div class="col-md-20 text-center">
            <button type="submit" class="btn btn-primary btn-block" value="Submit">Register School</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="assets/AdminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/AdminLTE/dist/js/adminlte.min.js"></script>
</body>
</html>

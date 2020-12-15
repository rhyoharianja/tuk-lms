<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Tuk Indonesia LMS</title>

      <!-- Favicon -->
      <link rel="shortcut icon" href={{asset("public/assets/images/logo-tuk-icon.png")}} />

      <link rel="stylesheet" href="public/assets/css/backend.min.css">
      <link rel="stylesheet" href="public/assets/vendor/%40fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="public/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
      <link rel="stylesheet" href="public/assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="public/assets/vendor/%40icon/dripicons/dripicons.css">

  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

      <div class="wrapper">
      <section class="login-content">
         <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
               <div class="col-12">
                  <div class="row align-items-center">
                     <div class="col-lg-6 mb-lg-0 mb-4 mt-lg-0 mt-4">
                        <img src="public/assets/images/login/01.png" class="img-fluid w-80" alt="">
                     </div>
                     <div class="col-lg-6">
                        <div class="d-flex justify-content-center">
                            <div class="p-12 text-center mb-5">
                                <img src="public/assets/images/logo-tuk-icon.png" height="50">
                                <br/>
                                <h2>Tuk Indonesia LMS</h2>
                           </div>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                           <div class="row">
                              <div class="col-lg-12">
                                 <div class="floating-label form-group">
                                    <input class="floating-input form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder=" ">
                                    <label>Email @error('email') {{ $message }} @enderror</label>
                                 </div>
                              </div>
                              <div class="col-lg-12">
                                 <div class="floating-label form-group">
                                    <input class="floating-input form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" placeholder=" ">
                                    <label>Password @error('password') {{ $message }} @enderror</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                 <div class="custom-control custom-checkbox mb-3">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" {{ old('remember') ? 'checked' : ''}}>
                                    <label class="custom-control-label" for="customCheck1">Ingat Saya</label>
                                 </div>
                              </div>
                              <div class="col-lg-6">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="text-danger float-right">Lupa Password ?</a>
                                @endif
                              </div>
                           </div>
                           <button type="submit" class="btn btn-danger">Masuk</button>
                           <p class="mt-3">
                              Belum Menjadi Member ?  <a href="{{ route('register') }}" class="text-danger">Registrasi</a>
                           </p>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      </div>

    <!-- Backend Bundle JavaScript -->
    <script src="public/assets/js/backend-bundle.min.js"></script>

    <!-- app JavaScript -->
    <script src="public/assets/js/app.js"></script>
  </body>
</html>

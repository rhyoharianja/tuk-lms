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
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                   <div class="floating-label form-group">
                                        <input class="floating-input form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        <label>Nama Lengkap</label>
                                        @error('name')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="floating-label form-group">
                                        <input class="floating-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="email">
                                        <label>Email</label>
                                        @error('email')
                                             <span class="invalid-feedback" role="alert">
                                                 <strong>{{ $message }}</strong>
                                             </span>
                                         @enderror
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                         <input class="floating-input form-control @error('bod') is-invalid @enderror" id="exampleInputdate" name="bod" value="{{ old('bod') }}" type="date" required>
                                         <label>Tanggal Lahir</label>
                                         @error('bod')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                        <select class="floating-input form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required>
                                            <option selected=""></option>
                                            <option value="laki-laki">Laki - Laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                        <label>Jenis Kelamin</label>
                                        @error('gender')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                         <textarea class="floating-input form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required></textarea>
                                         <label>Alamat Lengkap</label>
                                         @error('address')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="floating-label form-group">
                                         <input class="floating-input form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required>
                                         <label>Kota / Kabupaten</label>
                                         @error('city')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                         <input class="floating-input form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required>
                                         <label>No. Telepon / Ponsel</label>
                                         @error('phone')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="floating-label form-group">
                                         <input class="floating-input form-control @error('nationality') is-invalid @enderror" name="nationality" value="{{ old('nationality') }}" required>
                                         <label>Negara</label>
                                         @error('nationality')
                                              <span class="invalid-feedback" role="alert">
                                                  <strong>{{ $message }}</strong>
                                              </span>
                                          @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="floating-label form-group">
                                        <input class="floating-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password">
                                        <label>Sandi</label>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                   </div>
                                </div>
                                <div class="col-lg-6">
                                   <div class="floating-label form-group">
                                      <input id="password" class="floating-input form-control" name="password_confirmation" required autocomplete="new-password" type="password">
                                      <label>Konfirmasi Sandi</label>
                                   </div>
                                </div>
                                <div class="col-lg-12">
                                   <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline mb-3">
                                      <input type="checkbox" class="custom-control-input bg-danger" id="customCheck1">
                                      <label class="custom-control-label" for="customCheck1">Saya setuju dengan persyaratan penggunaan</label>
                                   </div>
                                </div>
                             </div>
                             <button type="submit" class="btn btn-danger">Daftar</button>
                             <p class="mt-3">
                                Sudah Memiliki Akun ? <a href="{{ route('login') }}" class="text-danger">Masuk</a>
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

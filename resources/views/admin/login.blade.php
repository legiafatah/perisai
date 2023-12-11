<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PERISAI Sae Nalendra</title>

    <style>
        .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
        .h-custom {
        height: calc(100% - 73px);
        }
        @media (max-width: 450px) {
            .h-custom {
            height: 100%;
            }
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="{{ url('images/perisai.png') }}"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if(session()->has('error'))
                    {{-- <div class="error-message">{{ session('error') }}</div> --}}
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }} !
                    </div>
                @endif
              <form method="POST" action="{{ route('admin.login') }}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input required type="text" id="username" name="username" class="form-control form-control-lg"
                    placeholder="Masukan Uesername" />
                  <label class="form-label" for="username">Username</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input required type="password" id="password" name="password" class="form-control form-control-lg"
                    placeholder="Masukan password" />
                  <label class="form-label" for="password">Password</label>
                </div>
      
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-success btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>
      
              </form>
            </div>
          </div>
        </div>
        <div
          class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-success">
          <!-- Copyright -->
          <div class="text-white mb-3 mb-md-0">
            Copyright Kelompok 7 © 2020. All rights reserved.
          </div>
          <!-- Copyright -->
      
          <!-- Right -->
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
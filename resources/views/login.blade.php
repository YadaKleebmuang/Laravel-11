<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login!</title>
    <style type="text/css">
        body { background: #F8F9FA; }
        img.avatar { width: 40%; border-radius: 50%; }
    </style>

  </head>
  <body>
    <div class="h-100 d-flex align-items-center justify-content-center" style="height: 100vh!important;">
        <main class="form-signin w-25 m-auto bg-body-tertiary p-5" style="width: 60vh!important;">
            <div class="text-center mb-3">
                <img src="https://www.w3schools.com/howto/img_avatar2.png" alt="Avatar" class="avatar">
              </div>

            <form action="{{ route('login.authenticate') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <h1>Please sign in</h1>
                @if (Session::has('error'))
                    <div class="message mb-2 text-danger">{{ Session::get('error') }}</div>
                @endif

                <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" placeholder="email">
                    <label for="email">Email address</label>
                    @error('email')
                        <div class="message mb-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-floating mb-3">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                        id="password" placeholder="password">
                    <label for="password">Password</label>
                    @error('password')
                        <div class="message mb-2 text-danger">{{ $message }}</div>

                    @enderror
                </div>
                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>

                <button class="btn btn-primary w-100 py-2" type="submit">{{ __('Sign in') }}</button>
                <p class="text-center my-4">OR</p>
                <a href="{{ route('register') }}" class="btn btn-primary py-2 w-100">{{ __('Sign up') }}</a>
            </form>
        </main>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

    


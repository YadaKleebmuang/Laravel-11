<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <style type="text/css">
        body { background: #f8f9fa;}
        img.avatar { width: 40%; border-radius: 50;}
    </style>

    </head>
  <body>

    <main class="form-signing m-auto">
        <div class="text-center mb-3">
            <img src="https://www.w3schools.com/howto/img_avatar2.png" class="avatar" alt="">
        </div>

        <form action="{{ route('register.auth') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Please sign up</h1>
            
            <div class="form-floating mb-3">
                <input type="text" name="name" id="name" class="form-control">
                <label for="name">Name</label>
                @error('name')
                    <div class="message text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <input type="email" name="email" id="email" class="form-control">
                <label for="email">Email</label>
                @error('email')
                    <div class="message text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-floating mb-3">
                <input type="password" name="password" id="password" class="form-control">
                <label for="password">Password</label>
                @error('password')
                    <div class="message text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button class="btn btn-success" type="submit">{{ __('sign up') }}</button>
            <p class="text-center my-4">OR</p>
            <a href="{{ route('login') }}" class="btn btn-success">{{__('sign in')}}</a>

        </form>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
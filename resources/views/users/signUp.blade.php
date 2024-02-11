<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="{{asset('images_and_icons/insta-fav.ico')}}">
    <link rel="stylesheet" href="{{asset('style/signup.css')}}">
    <title>instagram</title>
</head>
<body>
    <main>
        <div class="page">
            <div class="header">
              <h1 class="logo">instagram</h1>
              <p>Sign up to see photos and videos from your friends.</p>
              <button><i class="fab fa-facebook-square"></i> Log in with Facebook</button>
              <div>
                <hr>
                <p>OR</p>
                <hr>
              </div>
            </div>
            <div class="container">
              <form method="post" action="{{route('postSignUp')}}">
                @csrf
                <input type="text" name="email" placeholder="Mobile Number or Email">
                <sapn>@error('email'){{$message}}@enderror</sapn>
                <input type="text" name="name" placeholder="Full Name">
                <sapn>@error('name'){{$message}}@enderror</sapn>
                <input type="text" name="userName" placeholder="Username">
                <sapn>@error('userName'){{$message}}@enderror</sapn>
                <input type="password" name="password" placeholder="Password">
                <sapn>@error('password'){{$message}}@enderror</sapn>
                <button type="submit">Sign up</button>
              </form>
              
              <ul>
                <li>By signing up, you agree to our</li>
                <li><a href="">Terms</a></li>
                <li><a href="">Data Policy</a></li>
                <li>and</li>
                <li><a href="">Cookies Policy</a> .</li>
             </ul>
            </div>
        </div>
        <div class="option">
           <p>Have an account? <a href="{{route('login')}}">Log in</a></p>
        </div>
        <div class="otherapps">
          <p>Get the app.</p>
          <button type="button"><i class="fab fa-apple"></i> App Store</button>
          <button type="button"><i class="fab fa-google-play"></i> Google Play</button>
        </div>
        <div class="footer">
          <ul>
            <li><a href="">ABOUT</a></li>
            <li><a href="">HELP</a></li>
            <li><a href="">PRESS</a></li>
            <li><a href="">API</a></li>
            <li><a href="">JOBS</a></li>
            <li><a href="">PRIVACY</a></li>
            <li><a href="">TEMS</a></li>
            <li><a href="">LOCATIONS</a></li>
            <li><a href="">TOP ACCOUNTS</a></li>
            <li><a href="">HASHTAGS</a></li>
            <li><a href="">LANGUAGE</a></li>
          </ul>
          <p>© 2020 PICTUREGRAM</p>
        </div>
      </main>
      
</body>
</html>
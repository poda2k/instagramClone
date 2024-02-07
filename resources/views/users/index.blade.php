<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css" />
    <link rel="icon" type="image/png" href="{{asset('images_and_icons/insta-fav.ico')}}">
    <title>Instagram clone</title>
</head>
<body>
    <main class="flex align-items-center justify-content-center">
        <section id="mobile" class="flex">
        </section>
        <section id="auth" class="flex direction-column">
            <div class="panel login flex direction-column">
                <h1 title="Instagram" class="flex justify-content-center">
                    <img src="{{asset('images_and_icons/instagram-logo.png')}}" alt="Instagram logo" title="Instagram logo" />
                </h1>
                <form method="post" action="{{route('users.store')}}">
                    @csrf
                    <label for="email" class="sr-only">enter e-mail</label>
                    <input name="email" placeholder="enter e-mail" />

                    <label for="password" class="sr-only">Senha</label>
                    <input name="password" type="password" placeholder="password" />

                    <button type="submit">log in</button>
                </form>
                <div class="flex separator align-items-center">
                    <span></span>
                    <div class="or">OR</div>
                    <span></span>
                </div>
                <div class="login-with-fb flex direction-column align-items-center">
                    <div>
                        <img />
                        <a>Log in with facebook</a>
                    </div>
                    <a href="#">Forgot Password ?</a>
                </div>
            </div>
            <div class="panel register flex justify-content-center">
                <p>Don`t have an account?</p>
                <a href="{{route('users.create')}}">Sign up</a>
            </div>
            <div class="app-download flex direction-column align-items-center">
                <p>Get the app.</p>
                <div class="flex justify-content-center">
                    <img src="{{asset('images_and_icons/apple-button.png')}}"      alt="Apple Store" title="Apple Store" />
                    <img src="{{asset('images_and_icons/googleplay-button.png')}}" alt="Google Play" title="Google Play" />
                </div>
            </div>
        </section>
    </main>
    <footer>
        <ul class="flex flex-wrap justify-content-center">
            <li><a href="#">Meta</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Jobs</a></li>
            <li><a href="#">Help</a></li>
            <li><a href="#">API</a></li>
            <li><a href="#">Privacy</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Locations</a></li>
            <li><a href="#">Instagram Lite</a></li>
            <li><a href="#">Threads</a></li>
        </ul>
        
    </footer>
</body>
</html>
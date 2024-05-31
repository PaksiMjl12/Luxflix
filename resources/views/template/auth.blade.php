<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css" crossorigin="">

      <!--=============== CSS ===============-->
      <link rel="stylesheet" href="css/auth.css">

      <title>Luxflix . {{$title}}</title>
   </head>
   <body>
      @if ($errors->has('email'))
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>Error!</strong> {{ $errors->first('email') }}
        </div>
      @endif
      @if ($errors->has('name'))
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>Error!</strong> {{ $errors->first('name') }}
        </div>
      @endif
      @if ($errors->has('username'))
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>Error!</strong> {{ $errors->first('username') }}
        </div>
      @endif
      @if ($errors->has('password'))
        <div class="alert">
          <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
          <strong>Error!</strong> {{ $errors->first('password') }}
        </div>
      @endif
      
      <div class="login">
         <h1 class="label__title">LUXFLIX</h1>
         <img src="images/login-bg.png" alt="image" class="login__bg">

         <form method="POST" action="{{ $title == 'sign up' ? route('register') : route('login') }}" class="login__form">
          @csrf
          <h1 class="login__title">{{$title}}</h1>
      
          <div class="login__inputs">
          @if($title === 'sign up')
            <div class="login__names">
                <div>
                  <input type="text" placeholder="First name" required class="login__input" name="firstname">
                </div>
                <div>
                  <input type="text" placeholder="Last name" required class="login__input" name="lastname">
                </div>
                
              </div>
              <div class="login__box">
                <input type="username" placeholder="Username" required class="login__input" name="username">
              </div>
            @endif
            <div class="login__box">
              <input type="email" placeholder="Email" required class="login__input" name="email">
            </div>
      
            <div class="login__box">
              <input type="password" placeholder="Password" required class="login__input" name="password">
            </div>
          </div>
          
          @if($title === 'sign in')
          <div class="login__check">
            <div class="login__check-box">
              <input type="checkbox" class="login__check-input" id="user-check" name="remember_me">
              <label for="user-check" class="login__check-label">Remember me</label>
            </div>
          </div>
          @endif
      
          <button type="submit" class="login__button">Sign in</button>
          
          @if($title === 'sign in')
            <div class="login__register">
              Don't have an account? <a href="/register">Sign up</a>
          @else
            <div class="login__register">
              Already have an account? <a href="/login">Sign in</a>
          @endif
    </a>
  </form>
      </a>
   </body>
</html>
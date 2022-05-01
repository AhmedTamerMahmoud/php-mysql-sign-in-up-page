<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Sign up</title>
    <link rel="stylesheet" href="signup.css">
  </head>
  <body>
    
    <div class="user">
      <header class="user__header">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
          
      </header>
      
      <form class="form" method="post" action="Register.php">
          <div class="form__group" name="user">
              <input type="text" name="user" id="user" placeholder="Username" class="form__input" require />
          </div>
          
          <div class="form__group">
              <input type="email" placeholder="Email" class="form__input"/>
          </div>
          
          <div class="form__group" name="password">
              <input type="password" name="password" id="password" placeholder="Password" class="form__input" />
          </div>
          
          <button class="btn" type="submit">Sign up</button>
          <br>
          <div class='lol'>
          <a class = 'lol' href="signin.php">Click Here To Sign In</a>
          </div>
      </form>
      
    </div>
    
  </form>

    

    
  </body>

</html>
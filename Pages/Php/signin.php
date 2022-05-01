<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    
    <title>Sign in</title>
    <link rel="stylesheet" href="signin.css">
  </head>
  <body>
    <div class="user">
      <header class="user__header">
          <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3219/logo.svg" alt="" />
          
      </header>
      
      <form class="form" action ="validation.php" method="post">

          <div class="form__group">
              <input name ="user" type="text" placeholder="Username" class="form__input" />
          </div>

          <div class="form__group">
              <input type="password" name = "password" placeholder="Password" class="form__input" />
          </div>
          
          <button class="btn" type="submit">Sign in</button>
          <br>
          <div class='lol'>
            <a href="signup.php">Click Here To Sign Up</a>
          </div>
      </form>
  </div>
    
  
    
  </body>

  
</html>
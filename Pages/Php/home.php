<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="signin.css">
    <style>
    h1 {
    color: #0C2D48;
    font-family: arial, sans-serif;
    font-size: 38px;
    font-weight: bold;
    margin-top: 0px;
    margin-bottom: 1px;
    }
    .ok {
        border-radius:25px;
        background-color:white;
        border-color:green;
    }
    .ehet{
        margin-left:70px;
        border-radius:15px;
        border-color:green;
    }
    </style>
</head>
<body>
    <?php session_start();?>
    <form class="form" action ="validation.php" method="post">
        <div class="user">
            <div class="form__group">
                <h1> <?php echo "Welcome $_SESSION[username]"; ?></h1>
                    <div class ='ehet'>
                        <a class ='ok' href='logout.php'>Log out</a>
                    </div>
                </div>
        </div>
    </form>               
</body>
</html>
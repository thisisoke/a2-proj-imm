<?php
//Login PHP 

//start PHP Session 
session_start();


?>

<!doctype html>
<html>
    <head>
        <!-- Meta Data, please visit -->
                <meta charset="utf-8">
                <title>IMM News Metwork</title>
                <meta content="IMM News network aggregate of design news" name="description">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                <meta name="keywords" content="industry, news, career, imm" />
                <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
                <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
                <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
                <link rel="manifest" href="/site.webmanifest">
                <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
                <meta name="msapplication-TileColor" content="#da532c">
                <meta name="theme-color" content="#ffffff">
        </head>
        <body>
        
        <!-- Navgigation div of the article dashboard -->
        <div id= "navigation">
        <img src="assets/imm-logo-black.png" alt="IMM News Network" width="100" > 
        <ul>
          <li><a href="articles-list.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
          //Show the login or logout item conditional based on if current user has a authenticated session or not
        
            if(isset($_SESSION["username"])){
                ?>
                <li>
                    <a href="logout.php">Log Out: <?php echo($_SESSION["username"]) ?></a>
                    
                </li><?php
            } else {
                ?><li><a href="login.php">Log In</a></li><?php
            }
          ?>
        <!-- Show insert article link for admin users -->
        <?php 
            if($_SESSION["userType"] == 'admin'){  
            ?>
                <li>
                    <a href="insert-article.php">Insert Article</a>   
                </li>
                <li>
                    <a href="contact-list.php"> View Contact List Results</a>   
                </li>
                <?php
            }
        ?>
          
        </ul>
        </div>
    <h1> Login Page </h1>

<!--  Form to Login-->
<h2> Have an Account? Login here </h2>
<form action="login-process.php" method="POST"> 
    Username:<input type="text" name="username" />
    Password: <input type="password" name="password" />
   <input type="submit" />
</form>

<!-- Form to register an account -->
<h2> Don't Have An Account? Register here: </h2>
<form action="register-process.php" method="POST"> 
    Select a User name<input type="text" name="username" />
    Make a Password: <input type="password" name="password" />
    Email: <input type="email" name="email" />

    <input type="hidden" name="userType" value="registered">

   <input type="submit" />
</form>



</body>
</html>
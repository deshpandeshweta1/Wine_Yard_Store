<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/login_css.css"  rel="stylesheet">
<style>

.section{
   width: 80%; height:auto;  margin-top: 10%;  margin-left: 5.2%;
   font-family: cursive; position:inherit;
}

   </style>
    </head>
    <body>
  <?php session_start(); ?>
         <?php include './header.php';?>
</br>
        <div class="section">
            <form action="../html/userhomepage.php" method="POST" name="login" >
                <fieldset>
                    <legend> User Login</legend>
                    <label class="heading" for="name">UserName: </label>
                    <input type="text" name="name" id="name" required /></br>

                     <label class="heading" for="pwd">Password: </label>
                    <input type="password" name="pwd" id="pwd" required /></br>
                    </br>
 		  
                                      </br>
                    <input type="submit" value="Login" />
                </fieldset>
            </form>
<br><br>
        </div>
       <footer>
<?php include './footer.php';?>
</footer>
    </body>
</html>

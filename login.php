<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->
  <link rel="stylesheet" href="asset/css/style.css">
  <title>form</title>
</head>



<body>

  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <h1>Vision.Voyage</h1>
      </div>

      <!-- Login Form -->
      <form method="POST" action="login.php">
        <input type="text" required id="login " class="fadeIn second" name="login" placeholder="username">
        <input type="text" required id="password " class="fadeIn third" name="login" placeholder="password ">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="register.php">Note yet a member</a>
      </div>

    </div>
  </div>










</body>

</html>
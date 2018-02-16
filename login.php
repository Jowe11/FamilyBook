<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
  <title>FamilyBook | Login</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-4 col-md-offset-4">
        <h1 class="text-center login-title">Sign in to continue to FamilyBook</h1>
        <div class="account-wall">
          <img class="profile-img" src="./images/familyIcon.png" alt="Family cloud icon">
          <form class="form-signin" action="welcome.php" method="post">
            <input type="text" class="form-control" placeholder="First Name" name="firstName" required autofocus>
            <input type="text" class="form-control" placeholder="Email" name="username" required autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
                    Sign in</button>
            <label class="checkbox pull-left">
                    <input type="checkbox" value="remember-me" name="remember" checked>
                    Remember me
                </label>
            <!--            <a href="mailto:jowe11eleven@gmail.com" class="pull-right need-help">Need help? </a><span class="clearfix"></span>-->
          </form>
        </div>
          <!--        <a href="#" class="text-center new-account">Create an account </a>-->
      </div>
    </div>
  </div>


  <footer>
    <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </footer>
</body>

</html>

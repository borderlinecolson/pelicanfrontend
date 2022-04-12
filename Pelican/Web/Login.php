<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelican - Signin</title>
    <link rel="stylesheet" href="css/Darkmode/login.css">
  </head>
  <body>
    <div class="form-container">
      <h1 class=typelabel>Login</h1>
      <form name="Signin" action="/Backend/Auth.php" method="post" class="form-items">
        <input type="text" name="user" placeholder="Username" required><br>
        <input type="password" name="pass" placeholder="Password" required><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
 
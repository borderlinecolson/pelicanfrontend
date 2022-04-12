<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelican - Register</title>
    <link rel="stylesheet" href="css/Darkmode/register.css">
  </head>
  <body>
    <div class="form-container">
      <h1 class=typelabel>Regsiter</h1>
      <form name="Signin" action="/Backend/Register.php" method="post" class="form-items">
        <input type="text" name="user" placeholder="Username" required><br>
        <input type="password" name="pass" placeholder="Password" required><br>
        <input type="submit" value="Submit">
      </form>
    </div>
  </body>
</html>
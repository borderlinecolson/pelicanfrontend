<html>
  <head>
    <link rel="stylesheet" href="css/Darkmode/welcome.css">
    <title>Pelican</title>
  </head>

  <body>
    <div class="container">
      <header>
        <h1 class="Motto">Its Time To Join Pelican</h1>
        <h4 class="Motto">With the security of Matrix and the ease of Discord</h4>
      </header>

      <div>
        <button onclick="login()">Login</button>
        <button onclick="register()">Register</button>
      </div>
    </div>
      
    <script>
      const login = () => window.location.replace("Signin.php");
      const regsiter = () => window.location.replace("Signup.php");
    </script>
    </body>
</html>

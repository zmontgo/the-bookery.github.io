<?php
  session_start();

  require_once("../../../php_reqs/admin.php");

  $database = new Database;

  $error = "";
  $good = true;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = $_POST["password"];

    if($username == "") {$error .= "Username is required. ";$good = false;}
    elseif(strlen($username) > 50) {$error .= "Username must not be greater than 50 characters. ";$good = false;}
    if($password == "") {$error .= "Password is required. ";$good = false;}
    elseif(strlen($password) > 50) {$error .= "Password must not be greater than 50 characters. ";$good = false;}
    
    if ($good == true) {
      $login = $database->login($username, $password);
      if ($login != false) {
        $_SESSION["uid"]=$login[0];
        $_SESSION["firstname"]=$login[1];
        $_SESSION["lastname"]=$login[2];
        $_SESSION["username"]=$login[3];
        $_SESSION["flags"]=$login[4];

        header('Location: https://bookery.codingprojects.org/admin/');
      } else {
        $error .= "Incorrect username or password. ";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  // Yes I ripped that all off of w3schools
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Bookery | Admin Login</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="author" href="/humans.txt">
  <meta content="Dedicated to the creation, consumption, admiration, and discussion of literature. This is an excellent place for anyone who loves a written format!" name="description">
  <meta content="The Bookery" property="og:title">
  <meta content="https://codingprojects.org" property="og:url">
  <meta content="website" property="og:type">
  <meta content="Dedicated to the creation, consumption, admiration, and discussion of literature. This is an excellent place for Bibliophiles, Bibliophages, Logophiles, and anyone who loves a written format!" property="og:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" property="og:image">
  <meta content="summary" name="twitter:card">
  <meta content="The Bookery" name="twitter:title">
  <meta content="Dedicated to the creation, consumption, admiration, and discussion of literature. This is an excellent place for Bibliophiles, Bibliophages, Logophiles, and anyone who loves a written format!" name="twitter:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" name="twitter:image">
  <meta content="Site icon" name="twitter:image:alt">
  <link href="/stylesheets/global.css" rel="stylesheet">
  <script async src="/scripts/necessary.js">
  </script>
</head>
<body class="" id="theme">
  <header class="fullpage" id="particles-js">
    <div>
      <h1>The Bookery</h1>
      <h2>Admin Login</h2>
    </div>
  </header>

  <div class="main-content">
    <div class="content">
      <h2>Log In</h2>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <span style="margin-bottom: 0.5em;display:inline-block"><?php echo $error;?></span>
        <input name="username" type="text" placeholder="Username" required>
        <input name="password" type="password" placeholder="Password" required>
        <button type="submit">Submit</button>
      </form>
    </div>
  </div>
  <footer>
    <div>
      <h3>Copyright</h3>
      <p>&copy; Zachary Montgomery and Benjamin Hollon. All rights reserved.</p>
      <p>Website code is open source under the MIT license. For more information, visit the <a href="https://github.com/zmontgo/the-bookery-site" rel="noopener" target="_blank">GitHub</a> page.</p>
    </div>
    <div>
      <h3>Change Site Theme</h3><span style="display:block;margin-bottom:1rem">We will use a small cookie to remember your preference.</span> <label class="switch"><input id="changer" onclick="changeTheme()" type="checkbox"> <span class="slider"></span></label>
    </div>
    <div>
      <h3>Quick Links</h3>
      <ul>
        <li>
          <a href="/privacy/">Privacy Policy</a>
        </li>
        <li>
          <a href="/cookies/">Cookie Policy</a>
        </li>
        <li>
          <a href="/sitemap.xml" target="_blank">Sitemap</a>
        </li>
      </ul>
    </div>
  </footer>
  <script defer src="/scripts/particles.js">
  </script> 
  <script defer src="/scripts/main.js">
  </script>
</body>
</html>
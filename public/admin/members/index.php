<?php
  session_start();

  require_once("../../../php_reqs/admin.php");

  if(!isset($_SESSION["uid"])) {
    header('Location: https://bookery.codingprojects.org/admin/login/');
  }

  $disabled = "disabled";
  if (strpos($_SESSION["flags"], 'a') !== false) $disabled = "";

  $database = new Database;

  $userinfo = $database->getMembers();

  $error = "";
  $good = true;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    if($username == "") {$error .= "Username is required. ";$good = false;}
    elseif(strlen($username) > 50) {$error .= "Username must not be greater than 50 characters. ";$good = false;}
    if($password == "") {$error .= "Password is required. ";$good = false;}
    elseif(strlen($password) > 50) {$error .= "Password must not be greater than 50 characters. ";$good = false;}
    if($cpassword == "") {$error .= "Confirmation password is required. ";$good = false;}
    elseif(strlen($cpassword) > 50) {$error .= "Confirmation password must not be greater than 50 characters. ";$good = false;}
    if($cpassword !== $password) {$error .= "Password and confirmation password don't match. ";$good = false;}
    
    if ($good == true) {
      if ($database->createLogin($username, $password)) {
        $error = "Success!";
      } else {
        $error = "Something went wrong.";
      }
    }
  }

  function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Bookery | Admin Accounts</title>
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
  <div class="topnav" id="sticky-header">
    <ul>
      <li><a href="/admin/">Dashboard</a></li>
      <li><a href="/admin/members/">Admin Logins</a></li>
      <li><a href="/admin/friends/">Manage Friends</a></li>
      <li><a href="/admin/logout.php">Log Out</a></li>
    </ul>
  </div>
  <div class="main-content">
    <div class="content">
      <h2>Admin Profiles</h2>
      <h4>Manage or view other admin profiles.</h4>
    </div>

    <?php 
    if ($disabled !== false) {
      echo "<div class=\"content\">
        <h2>Create Log In</h2>
        <form action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" method=\"POST\" autocomplete=\"off\">
          <span style=\"margin-bottom: 0.5em;display:inline-block\">" . $error . "</span>
          <input name=\"username\" type=\"text\" placeholder=\"Username\" required>
          <input name=\"password\" type=\"password\" placeholder=\"Password\" required>
          <input name=\"cpassword\" type=\"password\" placeholder=\"Confirm Password\" required>
          <button type=\"submit\">Submit</button>
        </form>
      </div>";
      }
      // [0] - UID [1] - Firstname [2] - Lastname [3] - Username [4] - Flags
    for ($x = 0; $x <= count($userinfo)-1; $x++) {
      echo "<div class=\"content\">";
      echo "<h3> [" . $userinfo[$x][3] . "] " . $userinfo[$x][1] ." " . $userinfo[$x][2] . "</h3>";
      echo "<ul>";
      foreach (str_split($userinfo[$x][4]) as $priv) {
        if ($priv == "a") echo "<li>Admin</li>";
        if ($priv == "p") echo "<li>Create post</li>";
        if ($priv == "e") echo "<li>Edit post</li>";
        if ($priv == "d") echo "<li>Delete post</li>";
        if ($priv == "f") echo "<li>Manage friends</li>";
      }
      echo "</ul>";
      if ($disabled == "") echo "<a href=\"edit.php?uid=" . $userinfo[$x][0] . "\">Edit user</a>";
      echo "</form>";
      echo "</div>";
    }
    ?>
      
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
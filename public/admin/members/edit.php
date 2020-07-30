<?php
  session_start();

  require_once("../../../php_reqs/admin.php");

  if(!isset($_SESSION["uid"])) {
    header('Location: https://bookery.codingprojects.org/admin/login/');
  }

  /*$disabled = "disabled";
  if (strpos($_SESSION["flags"], 'a') !== false) $disabled = "";*/

  $disabled = "";

  $database = new Database;

  if (isset($_GET["uid"]) && is_numeric($_GET["uid"])) {
    $uid = $_GET["uid"];
    $userinfo = $database->getMembers("infinity", $uid);
  } elseif (isset($_POST["uid"]) && is_numeric($_POST["uid"])) {
    $uid = $_POST["uid"];
    $userinfo = $database->getMembers("infinity", $uid);
  } else {
    header('Location: ../');
  }

  echo $uid;

  $error = "";
  $good = true;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin = $create = $edit = $delete = $friends = "";

    if (isset($uid) && is_numeric($uid)) {
      if (!isset($_POST["firstname"])) {$error .= "First name is required. ";$good=false;}
      $firstname = test_input($_POST["firstname"]);
      if (isset($_POST["a"])) $admin = "a";
      if (isset($_POST["p"])) $create = "p";
      if (isset($_POST["e"])) $edit = "e";
      if (isset($_POST["d"])) $delete = "d";
      if (isset($_POST["f"])) $friends = "f";

      $flags = $admin . $create . $edit . $delete . $friends;

      if ($disabled !== "disabled") {
        if ($good == true) {
          if ($database->updateMember($uid, $flags)) header('Location: ../members/');
          else $notice = "Something went wrong.";
        }
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
    for ($x = 0; $x <= count($userinfo[0])-1; $x++) {
      echo "<div class=\"content\">";
      echo "<input name=\"username\" placeholder=\"Username\" value=\"" . $userinfo[$x][3] . ">";
      echo "<input name=\"firstname\" placeholder=\"First Name\" value=\"" . $userinfo[$x][1] . ">";
      echo "<input name=\"lastname\" placeholder=\"Last Name\" value=\"" . $userinfo[$x][2] . ">";
      echo "<form action=\"" . htmlspecialchars($_SERVER["PHP_SELF"]) . "\" method=\"POST\">";
      echo "<input name=\"uid\" value=\"" . $userinfo[0][$x] . "\" style=\"display:none\">";
      echo "<label class=\"checkbox-container $disabled\">Admin
              <input type=\"checkbox\" name=\"a\" $disabled ";
      if (strpos($userinfo[2][$x], 'a') !== false) {
        echo  "checked";
      }
      echo  ">
              <span class=\"checkmark\"></span>
            </label>";
      echo "<label class=\"checkbox-container $disabled\">Create post
              <input type=\"checkbox\" name=\"p\" $disabled ";
      if (strpos($userinfo[2][$x], "p") !== false) {
        echo  "checked";
      }
      echo  ">
              <span class=\"checkmark\"></span>
            </label>";
      echo "<label class=\"checkbox-container $disabled\">Edit post
            <input type=\"checkbox\" name=\"e\" $disabled ";
            if (strpos($userinfo[2][$x], "e") !== false) {
              echo  "checked";
            }
            echo  ">
            <span class=\"checkmark\"></span>
          </label>";
      echo "<label class=\"checkbox-container $disabled\">Delete post
          <input type=\"checkbox\" name=\"d\" $disabled ";
          if (strpos($userinfo[2][$x], "d") !== false) {
            echo  "checked";
          }
          echo  ">
          <span class=\"checkmark\"></span>
        </label>";
      echo "<label class=\"checkbox-container $disabled\">Manage friends
        <input type=\"checkbox\" name=\"f\" $disabled ";
        if (strpos($userinfo[2][$x], "f") !== false) {
          echo  "checked";
        }
        echo  ">
        <span class=\"checkmark\"></span>
      </label>";
      if ($disabled != "disabled") echo "<button type=\"submit\">Update</button>";
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
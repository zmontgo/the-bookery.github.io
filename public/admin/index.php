<?php
  session_start();

  require_once("../../php_reqs/admin.php");

  if(!isset($_SESSION["uid"])) {
    header('Location: https://bookery.codingprojects.org/admin/login/');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Bookery | Admin Dashboard</title>
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
      <h2>Hey, <?php echo $_SESSION["firstname"];?>!</h2>
      <h4>Welcome to your dashboard.</h4>
      <p>Quick links:</p>
      <ul>
        <li><a href="/admin/new/">New post</a></li>
        <li><a href="/admin/friends/new/">Add friend</a></li>
      </ul>
    </div>
    <div class="content">
      <h2>Blog Posts</h2>
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
  <script defer src="/scripts/main.js">
  </script>
</body>
</html>
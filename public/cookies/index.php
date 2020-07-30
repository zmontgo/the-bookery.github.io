<?php
  require_once("../../php_reqs/connect.php");

  $database = new HitCount;

  $database->doQuery("cookies");
?>
<!DOCTYPE html>
<html>
<head>
  <title>The Bookery | Cookie Policy</title>
  <meta content="The Bookery | Cookie Policy" property="og:title">
  <meta content="https://codingprojects.org/cookies/" property="og:url">
  <meta content="website" property="og:type">
  <meta content="Your privacy is very important to us! Learn how we use cookies and how we protect your information." property="og:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" property="og:image">
  <meta content="summary" name="twitter:card">
  <meta content="The Bookery | Cookie Policy" name="twitter:title">
  <meta content="Your privacy is very important to us! Learn how we use cookies and how we protect your information." name="twitter:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" name="twitter:image">
  <meta content="Site icon" name="twitter:image:alt">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="author" href="/humans.txt">
  <link href="../stylesheets/global.css" rel="stylesheet">
  <script async src="../scripts/necessary.js">
  </script>
</head>
<body class="" id="theme">
  <header class="fullpage" id="particles-js">
    <div>
      <h1>The Bookery</h1>
      <h2>Cookie Policy</h2>
      <p><a href="../">Back Home</a></p>
    </div>
  </header>

  <div class="topnav" id="sticky-header">
    <ul>
      <li><a href="/">Home</a></li>
      <li><a>Blog (Coming Soon!)</a></li>
      <li><a href="/friends/">Our Friends</a></li>
    </ul>
  </div>

  <div class="main-content">
    <div class="content">
      <h2>Just One!</h2>
      <p>We use one cookie on our site. It is to remember your theme choice for the site (and this is only set if you turn on light theme). We don't use any tracking or analytics cookies at all.</p>
    </div>
  </div>
  <footer>
    <div>
      <h3>Copyright</h3>
      <p>&copy; Zachary Montgomery and Benjamin Hollon. All rights reserved.</p>
      <p>Website code is open source under the MIT license. For more information, visit the <a href="https://github.com/zmontgo/the-bookery-site" target="_blank">GitHub</a> page.</p>
    </div>
    <div>
      <h3>Change Site Theme</h3><span style="display:block;margin-bottom:1rem">We will use a small cookie to remember your preference.</span> <label class="switch"><input id="changer" onclick="changeTheme()" type="checkbox"> <span class="slider"></span></label>
    </div>
    <div>
      <h3>Quick Links</h3>
      <ul>
        <li>
          <a href="../privacy/">Privacy Policy</a>
        </li>
        <li>
          <a href="../cookies/">Cookie Policy</a>
        </li>
        <li>
          <a href="../sitemap.xml" target="_blank">Sitemap</a>
        </li>
      </ul>
    </div>
  </footer>
  <script src="../scripts/particles.js">
  </script> 
  <script src="../scripts/main.js">
  </script>
</body>
</html>
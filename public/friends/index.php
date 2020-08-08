<?php
  require_once("../../php_reqs/connect.php");

  $database = new HitCount;

  $database->doQuery("friends");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Bookery | Our Friends</title>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <link rel="author" href="/humans.txt">
  <meta content="Check out some of our best friends on Habitica and Discord!" name="description">
  <meta content="The Bookery" property="og:title">
  <meta content="https://codingprojects.org" property="og:url">
  <meta content="website" property="og:type">
  <meta content="Check out some of our best friends on Habitica and Discord!" property="og:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" property="og:image">
  <meta content="summary" name="twitter:card">
  <meta content="The Bookery" name="twitter:title">
  <meta content="Check out some of our best friends on Habitica and Discord!" name="twitter:description">
  <meta content="https://codingprojects.org/images/bookery-logo.png" name="twitter:image">
  <meta content="Site icon" name="twitter:image:alt">
  <link href="/stylesheets/global.css" rel="stylesheet">
  <script async src="/scripts/necessary.js">
  </script>
  <script defer src="/scripts/solid.js"></script>
  <script defer src="/scripts/fontawesome.js"></script>
</head>
<body class="" id="theme">
  <header class="fullpage" id="particles-js">
    <div>
      <h1>The Bookery</h1>
      <h2>Our Best Friends</h2>
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
      <h2>About Us</h2>
      <p>We have lots of communities we enjoy who we've decided to be friends with! If you're interested in joining any of them, check them out!</p>
      <p>Have a server or Habitica guild and want to be our friend? Contact us on our Discord!</p>
    </div>

    <div class="offer content">
      <h2 style="flex-basis:100%">Discord Servers</h2>
      <div class="content square red">
        <div class="text">
          <h3>Knights of Academia</h3>
          <p>An educational organization devoted to helping individuals actively become the greatest versions of themselves through the development of self discipline, critical thinking, and positive habits.</p>
          <a href="https://discord.gg/r4vgPKA" rel="noopener" target="_blank">Join Link</a>
        </div>
      </div>
    </div>


    <div class="offer content">
      <h2 style="flex-basis:100%">Habitica Guilds</h2>
      <div class="content square">
        <div class="text">
          <h3>Gamified Reading</h3>
          <p>This guild not only deals with major problems such as time management, long TBR (To-Be-Read) lists, and buying too many books, but it also makes tackling these problems fun!</p>
          <a href="https://habitica.com/groups/guild/381f73d0-087d-4426-86df-f4cfd3d7ab4c" rel="noopener" target="_blank">Guild Link</a>
        </div>
      </div>
      <div class="content square">
        <div class="text">
          <h3>The Bookworms</h3>
          <p>A guild for people who love books and want to share with a community.</p>
          <a href="https://habitica.com/groups/guild/381f73d0-087d-4426-86df-f4cfd3d7ab4c" rel="noopener" target="_blank">Guild Link</a>
        </div>
      </div>
      <div class="content square">
        <div class="text">
          <h3>Short Story Readers</h3>
          <p>A guild dedicated to the reading of short stories, bringing you wonder in snack-sized entertainment.</p>
          <a href="https://habitica.com/groups/guild/f18255a5-070e-49e7-a915-bde0731d953d" rel="noopener" target="_blank">Guild Link</a>
        </div>
      </div>
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

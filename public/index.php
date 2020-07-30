<?php
  require_once("../php_reqs/connect.php");

  $database = new HitCount;

  $database->doQuery("home");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>The Bookery</title>
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
  <link href="stylesheets/global.css" rel="stylesheet">
  <script async src="scripts/necessary.js">
  </script>
</head>
<body class="" id="theme">
  <header class="fullpage" id="particles-js">
    <div>
      <h1>The Bookery</h1>
      <h2>The Reader's Community</h2>
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
      <p>The Bookery is a community created in 2020 by Zachary Montgomery and Benjamin Hollon, dedicated to the creation, consumption, admiration, and discussion of literature. This is an excellent place for Bibliophiles, Bibliophages, Logophiles, and anyone who loves a written format!</p>
    </div>

    <div class="offer content">
      <h2 style="flex-basis:100%">Where to Find Us</h2>
      <div class="content square">
        <div class="text">
          <h3>Discord</h3>
          <p>The heart and soul of our community. Tons of book-related conversations, as well as fun and off-topic chats, and plenty of events!</p>
          <p>Check us out: <a href="https://discord.gg/mhu4maf" rel="noopener" target="_blank">Join Link</a></p>
        </div>
      </div>
      <div class="content square">
        <div class="text">
          <h3>Goodreads</h3>
          <p>Join our Goodreads group to update us on your reading status!</p>
          <p>Join now: <a href="https://www.goodreads.com/group/show/1091473-the-bookery" rel="noopener" target="_blank">Group Link</a></p>
        </div>
      </div>
    </div>

    <div class="content offer">
      <h2 style="flex-basis:100%">What We Offer</h2>
      <div class="content square">
        <div class="text">
          <h3>Events</h3>
          <p>We host plenty of reading and writing events across our communities!</p>
        </div>
      </div>
      <div class="content square">
        <div class="text">
          <h3>Book Suggestions</h3>
          <p>Looking for something to read? We can help with that!</p>
        </div>
      </div>
      <div class="content square">
        <div class="text">
          <h3>Writing and Reading Help</h3>
          <p>Need help with your next project, or trying to read a book you find hard to understand? We can help you!</p>
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
          <a href="privacy/">Privacy Policy</a>
        </li>
        <li>
          <a href="cookies/">Cookie Policy</a>
        </li>
        <li>
          <a href="sitemap.xml" target="_blank">Sitemap</a>
        </li>
      </ul>
    </div>
  </footer>
  <script defer src="scripts/particles.js">
  </script> 
  <script defer src="scripts/main.js">
  </script>
</body>
</html>
<?php
  session_start();
  unset($_SESSION["uid"], $_SESSION["username"]);
  header("Location: /");
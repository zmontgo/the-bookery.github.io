<?php
  require_once(__DIR__ . "/config.php");

  class HitCount {
    public function __construct() {
      try {
        $this->database = new mysqli(hostname, username, password, database);
      }
      catch(Exception $e) {
        return "Connection failed: " . $e->getMessage();
      }
    }

    function doQuery($page) {
      try {
        $page = $page . "_counter";
        $stmt = $this->database->prepare("UPDATE $page SET counter = counter + 1");
        $stmt->execute();
        $stmt->close();
      } catch (Exception $e) {
        echo "Error updating hit count. " . $e;
      }
    }

    function __destruct() {
      $this->database->close();
    }
  }
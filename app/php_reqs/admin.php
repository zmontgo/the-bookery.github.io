<?php
  require_once(__DIR__ . "/config.php");

  class Database {
    public function __construct() {
      try {
        $this->database = new mysqli(hostname, username, password, database);
      }
      catch(Exception $e) {
        return "Connection failed: " . $e->getMessage();
      }
    }

    function login($username, $password) {
      try {
        $stmt = $this->database->prepare("SELECT uid, firstname, lastname, password, flags FROM admin_login WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($uid, $firstname, $lastname, $db_password, $flags);
        $stmt->fetch();
        $stmt->close();

        if (password_verify($password, $db_password) == true) {
          $member_vars = array($uid, $firstname, $lastname, $username, $flags);
          return $member_vars;
        } else {
          return false;
        }
      } catch (Exception $e) {
        return false;
      }
    }

    function getMembers($limit = "infinity", $uid = null) {
      $stmt = $this->database->prepare("SELECT uid, firstname, lastname, username, flags FROM admin_login");
      $stmt->execute();
      $stmt->bind_result($db_uid, $firstname, $lastname, $username, $flags);

      $member_vars = array();

      while ($stmt->fetch()) {
        $member_vars[] = array($db_uid, $firstname, $lastname, $username, $flags);
      }

      $stmt->close();
      return $member_vars;
    }

    function createLogin($firstname, $lastname, $username, $password) {
      // Does not check who does it! Needs to be done before calling!!! 
      try {
        $stmt = $this->database->prepare("SELECT * FROM admin_login WHERE username = ?");
        $stmt->execute();
        $stmt->store_result();
        $count = $stmt->num_rows;
        $stmt->close();

        if ($count == 0) {
          $stmt = $this->database->prepare("INSERT INTO admin_login (firstname, lastname, username, password) VALUES (?, ?, ?, ?)");
          $password = password_hash($password, PASSWORD_ARGON2ID);
          $stmt->bind_param("ssss", $firstname, $lastname, $username, $password);
          $stmt->execute();
          $stmt->close();
          return true;
        } else {
          return "Username taken";
        }
      } catch (Exception $e) {
        return false;
      }
    }

    function updateMember($uid, $flags) {
      // Does not check who does it! Needs to be done before calling!!! 
      try {
        $stmt = $this->database->prepare("UPDATE admin_login SET flags = ? WHERE uid = ?");
        $stmt->bind_param("ss", $flags, $uid);
        $stmt->execute();
        $stmt->close();
        return true;
      } catch (Exception $e) {
        return false;
      }
    }

    function __destruct() {
      $this->database->close();
    }
  }
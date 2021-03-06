<?php


function addAccount($username, $passwrd){
  
    global $db;
    $query = "CREATE TABLE IF NOT EXISTS `accounts` ( `user` VARCHAR(15) NOT NULL , `passwrd` VARCHAR(30) NOT NULL )";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    $query = "INSERT INTO accounts VALUES(:username, :passwrd)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':passwrd', $passwrd);
    $statement->execute(); // run query
    $statement->closeCursor(); //release hold on this connection
    
  }
  
  function addAccountInfo($username, $fname, $lname, $email, $cid, $major){
    
    global $db;
  
    $query = "CREATE TABLE IF NOT EXISTS `account_info` ( `user` VARCHAR(15) NOT NULL , `email` VARCHAR(30) NOT NULL , `fname` VARCHAR(30) NOT NULL , `lname` VARCHAR(30) NOT NULL , cid VARCHAR(30) NOT NULL, major VARCHAR(30) NOT NULL)";
    $statement = $db->prepare($query);
    $statement->execute();
    $statement->closeCursor();
    $query = "INSERT INTO account_info VALUES(:username, :fname, :lname, :email, :cid, :major)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':cid', $cid);
    $statement->bindValue(':major', $major);
    $statement->execute(); // run query
    $statement->closeCursor(); //release hold on this connection
    
  }

  function validate_login($username, $password){
    global $db;

    $query = "SELECT accounts.passwrd FROM accounts WHERE accounts.user =:username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute(); // run query
    $results = $statement->fetchAll();
    $statement->closeCursor(); //release hold on this connection
    
    if(sizeof($results) > 0 ){
      $hash = htmlspecialchars($password); 
      $hash = crypt($hash, "web4640");
      if(strcmp($hash, crypt($password, $hash)) === 0){
        return 1;
      }
    }
    else{
      return 0;
    }
  }

  function getMyInfo($username){
    global $db;

    $query = "SELECT * FROM account_info WHERE account_info.user =:username";
    $statement = $db->prepare($query);
    $statement->bindvalue(':username', $username);
    $statement->execute();
    $results = $statement->fetchAll();
    $statement->closeCursor();

    return $results;
  }
?>


<?php

require_once("login.php");
// When activating the "Send" button on the login form, we retrieve the input data

if (isset($_POST['submit'])==true)
{
    
    $login = $_POST['login'];
    $password = $_POST['pass'];
    // connection to the database

    try
  {
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
  }
  catch(Exception $e)
  {
    die('Erreur : '.$e->getMessage());
  }
    
    // Compare the filled user name with the user names stored in the database
    $req = $bdd->prepare('SELECT * FROM admin WHERE login = :login');
   
    $req->execute(array(
       'login' => $login));
    $result = $req->fetch();
   // Compare the completed user password with the corresponding user passwords in the database
    if ($login != $result['login'])
    {
      echo '<script>alert("Pas le bon mot de passe Try again ");</script>';
    }
    else
    {
      if ($password == $result['pass']) 
      {
        // If the password is correct, check the status of the user and redirect to appropriate pages
          session_start();
          $_SESSION['login'] = $login;
          $_SESSION['pass'] = $pass;              
            
          header('Location: admin.php');
       
      }
      else 
      {
        echo '<script>alert("Tu es pas l admin !!!!  ");</script>';
      }
    }
}
?>
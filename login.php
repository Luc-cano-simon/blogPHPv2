<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="modal.css">
  <title>Login admin</title>
</head>
<body>

  <?php 

require_once("access.php");
   
   ?>

	<div class="container">
    <!-- <h2>Accés administrateur</h2> -->
    <!-- Trigger the modal with a button -->

<form method="POST">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header" style=>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4><span class=""></span> Login Admin</h4>
          </div>
          <div class="modal-body" style="">
            <form role="form">
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Nom d'administrateur </label>
                <input name="login" type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Mot de passe administrateur </label>
                <input name="pass" type="password" class="form-control" id="psw" placeholder="Enter password">
              </div>

              <button name="submit" type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Annuler</button>

          </div>
        </div>

      </div>
    </div> 
  </div>

</form>

  <a href="" class=><i class=></i></a> 


  <script type="text/javascript" src="js/modal.js"></script>
</body>
</html>



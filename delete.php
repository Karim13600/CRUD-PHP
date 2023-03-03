<?php require 'database.php'; $id=0; if(!empty($_GET['id'])){ $id=$_REQUEST['id']; } if(!empty($_POST)){ $id= $_POST['id']; $pdo=Database::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $sql = "DELETE FROM user  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: index_crud_v_1.0.php");
    
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
 
<body>
<div class="container">
    <div class="span10 offset1">
<div class="row">
<h3>Delete a user</h3>
</div>

<form class="form-horizontal" action="delete.php" method="post">
    <input type="hidden" name="id" value="<?php echo $id;?>"/>
    Are you sure to delete ?
<div class="form-actions">
    <button type="submit" class="btn btn-danger">Yes</button>
    <a class="btn" href="index_crud_v_1.0.php">No</a>
</div>
</form>
</div>
</div>
<!-- /container -->
</body>
</html>
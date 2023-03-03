<!DOCTYPE html>
<?php require('database.php'); //on appelle notre fichier de config 
    $id = null; if (!empty($_GET['id'])) { $id = $_REQUEST['id']; } if (null == $id) { header("location:index.php"); } else { //on lance la connection et la requete 
    $pdo = Database ::connect(); $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION) .
    $sql = "SELECT * FROM user where id =?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    $data = $q->fetch(PDO::FETCH_ASSOC);
    Database::disconnect();
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
    <h3>Edition</h3>
    </div>

    <div class="form-horizontal" >
    <div class="control-group">
        <label class="control-label">Name</label>
    <div class="controls">
        <label class="checkbox">
        <?php echo $data['name']; ?>
        </label>
    </div>
    </div>
<div class="control-group">
    <label class="control-label">Firstname</label>


<div class="controls">
<label class="checkbox">
    <?php echo $data['firstname']; ?>
</label>
</div>
</div>
<div class="control-group">
    <label class="control-label">Email Address</label>


<div class="controls">
    <label class="checkbox">
        <?php echo $data['email']; ?>
    </label>
</div>
</div>

<div class="control-group">
    <label class="control-label">Phone</label>

<div class="controls">
    <label class="checkbox">
    <?php echo $data['tel']; ?>
    </label>
</div>
</div>
<div class="control-group">
    <label class="control-label">Pays</label>


<div class="controls">
    <label class="checkbox">
    <?php echo $data['pays']; ?>
    </label>
</div>
</div>
<div class="control-group">
    <label class="control-label">Metier</label>


<div class="controls">
    <label class="checkbox">
    <?php echo $data['metier']; ?>
    </label>
</div>
</div>

<div class="control-group">
    <label class="control-label">Url</label>

<div class="controls">
    <label class="checkbox">
        <?php echo $data['url']; ?>
    </label>
</div>
</div>
<div class="control-group">
    <label class="control-label">Comment</label>

<div class="controls">
    <label class="checkbox">
        <?php echo $data['comment']; ?>
    </label>
</div>
</div>
<div class="form-actions">
<a class="btn" href="index_crud_v_1.0.php">Back</a>
</div>
</div>
</div>
</div>
    
<!-- /container -->
</body>
</html>
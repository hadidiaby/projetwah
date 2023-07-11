<?php
    include_once("header.php");
    include_once("main.php");

    if(!empty($_POST["inputid"])&&!empty($_POST["inputnom"])&&!empty($_POST["inputrole"])){
        $query="insert into fonction(id,nom,role) values (:id,:nom,:role)";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["id"=>$_POST["inputid"],"nom"=>$_POST["inputnom"],"role"=>$_POST["inputrole"]]);
        $pdostmt->closeCursor();
        #header("Location:personnel.php");
    }
?>
<h1 class="mt-5">Ajouter une fonction</h1>

<form class="row g-3" method="POST">
<div class="col-12">
    <label for="inputid" class="form-label">id</label>
    <input type="text" class="form-control" id="inputid" name="inputid" placeholder="pX" required>
  </div>
<div class="col-12">
    <label for="inputnom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="inputnom" name="inputnom" placeholder="Douampo" required>
  </div>
  <div class="col-12">
    <label for="inputprenom" class="form-label">role</label>
    <input type="text" class="form-control" id="inputrole" name="inputrole"  required>
  </div>

  
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Enregistrer</button>
  </div>
</form>
</div>
</main>
    <?php 
        include_once("footer.php");
    ?>

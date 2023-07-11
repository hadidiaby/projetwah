<?php
    include_once("header.php");
    include_once("main.php");

    if(!empty($_POST["inputid"])&&!empty($_POST["inputnom"])&&!empty($_POST["inputlongitude"])&&!empty($_POST["inputlatitude"])){
        $query="insert into parcelle(id,nom,longitude,latitude) values (:id,:nom,:longitude,:latitude)";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["id"=>$_POST["inputid"],"nom"=>$_POST["inputnom"],"longitude"=>$_POST["inputlongitude"],"latitude"=>$_POST["inputlatitude"]]);
        $pdostmt->closeCursor();
        #header("Location:personnel.php");
    }
?>
<h1 class="mt-5">Ajouter une parcelle</h1>

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
    <label for="inputprenom" class="form-label">longitude</label>
    <input type="text" class="form-control" id="inputlongitude" name="inputlongitude"  required>
  </div>
  
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">latitude</label>
    <input type="password" class="form-control" id="inputlatitude" name="inputlatitude" required>
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
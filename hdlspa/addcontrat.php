<?php
    include_once("header.php");
    include_once("main.php");

    if(!empty($_POST["inputid"])&&!empty($_POST["inputplanteur"])&&!empty($_POST["inputdate"])&&!empty($_POST["inputmontant"])&&!empty($_POST["inputsociete"])){
        $query="insert into contrat (id,planteur,date,montant,societe) values (:id,:planteur,:date,:montant,:societe)";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["id"=>$_POST["inputid"],"planteur"=>$_POST["inputplanteur"],"date"=>$_POST["inputdate"],"montant"=>$_POST["inputmontant"],"societe"=>$_POST["inputsociete"]]);
        $pdostmt->closeCursor();
        #header("Location:personnel.php");
    }
?>
<h1 class="mt-5">Nouveau Contrat</h1>

<form class="row g-3" method="POST">
<div class="col-12">
    <label for="inputid" class="form-label">id</label>
    <input type="text" class="form-control" id="inputid" name="inputid" placeholder="pX" required>
  </div>
<div class="col-12">
    <label for="inputplanteur" class="form-label">planteur</label>
    <input type="text" class="form-control" id="inputplanteur" name="inputplanteur" placeholder="Kouassi" required>
  </div>
  <div class="col-12">
    <label for="inputdate" class="form-label">date</label>
    <input type="date" class="form-control" id="inputdate" name="inputdate"  required>
  </div>
  
  <div class="col-12">
    <label for="inputmontant" class="form-label">montant</label>
    <input type="text" class="form-control" id="inputmontant" name="inputmontant" placeholder="10000 fcfa" required>
  </div>
  <div class="col-12">
    <label for="inputmontant" class="form-label">societe</label>
    <input type="text" class="form-control" id="inputsociete" name="inputsociete" placeholder="facebook" required>
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

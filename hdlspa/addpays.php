<?php
    include_once("header.php");
    include_once("main.php");

    if(!empty($_POST["inputid"])&&!empty($_POST["inputnom"])&&!empty($_POST["inputcapitale"])){
        $query="insert into pays(id,nom,capitale) values (:id,:nom,:capitale)";
        $pdostmt=$pdo->prepare($query);
        $pdostmt->execute(["id"=>$_POST["inputid"],"nom"=>$_POST["inputnom"],"capitale"=>$_POST["inputcapitale"]]);
        $pdostmt->closeCursor();
        #header("Location:personnel.php");
    }
?>
<h1 class="mt-5">Ajouter un pays</h1>

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
    <label for="inputcapitale" class="form-label">capitale</label>
    <input type="text" class="form-control" id="inputcapitale" name="inputcapitale" placeholder="" required>
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

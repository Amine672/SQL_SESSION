<?php
require_once '../controler/addCategorie.controler.php';
?>

<form action="../controler/addCategorie.controler.php" method="post" >

  <div class="container-form">

    <div class="mb-3">
      <label id="firstcolorletter" for="date_debut">Catégorie</label>
      <select class="form-control" name="nom_session" required>
        <option value="" selected>Choisir une catégorie...</option>
        <option value="">New Session</option>

        <?php
        foreach ($nom_categorie as $key => $value)
        {?>
          <option value="<?= $value ;?>"><?= $value;?></option>
          <?php
        }?>
      </select>
    </div>

    <div class="mb-3">
      <label id="firstcolorletter" for="nom_categorie">Nom du Module</label>
      <div class="input-group">
        <input type="text" name="nom_categorie" placeholder="Nom du module..." class="form-control" required>
      </div>
    </div>
    <div id="formcontainer"></div>

    <hr class="mb-4">

    <input type="submit" value="Finaliser" class="btn btn-primary btn-lg btn-block" id="thebutton" href="home.html">
  </div>
</form>

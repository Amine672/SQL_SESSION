<?php

require_once "../controler/session.controler.php";
require_once "../controler/stagiaire.controler.php";

$i = count($place_reserve);
$a = 0;
?>

<div class="d-md-flex flex-md-equal ">
  <div class="bg-light text-center text-white overflow-hidden">
    <div class="my-3 py-3">
      <div class="mx-auto" style="width: 60%;  border-radius: 1em 1em 1em 1em; color: black;" id="box">
        <div class="container ">
          <h2 class="display-5"><?= $nom_session ;?></h2>
          <hr class="mb-4">
          <?php
          foreach ($categories as $key => $value)
          {?>
            <h4><?= $value['nom_categorie'] ;?></h4>
            <hr class="mb-4" style="width: 30%;">
            <?php
            foreach ($categories[$key]['modules'] as $module)
            {?>
                <p><?= "Module : " . $module['nom_module'];?></p>
                <p><?= "Durée : " . $duree[$a] . " jours";?></p>
                <hr class="mb-3" style="width: 20%;">
            <?php
            }
          }
          $a++;
          ?>
          <hr class="mb-4">
          <div class="container" id="contain">
            <div class="py-1 text-center">
              <h3 class="mb-3" style="color: black;">Inscrire un stagiaire</h3>
            </div>

            <form action="../controler/stagiaire.controler.php?id_session=<?= $_GET['id_session'];?>" method="post" >

              <div class="container-form">
                <div class="mb-3">
                  <select class="form-control" id="inputGroupSelect01">
                    <option selected>Choisir un stagiaire</option>
                    <option></option>
                  </select>
                </div>
                <hr class="mb-4">

                <div id="formcontainer"></div>
                <?php
                if($place_restante[$_GET['id_session'] - 1] > 0)
                {?>
                  <input type="submit" value="L'inscrire" class="btn btn-primary btn-lg btn-block" id="thebutton">
                  <?php
                }
                else
                {?>
                  <input type="submit" value="L'inscrire" class="btn btn-primary btn-lg btn-block" id="thebutton" disabled>
                  <?php
                }
                ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

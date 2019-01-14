<?php
  require_once '../controler/addSession.controler.php';
 ?>

<form action="../controler/addSession.controler.php" method="post" >

<div class="mb-3">
  <label id="firstcolorletter" for="nom_session">Session</label>
  <div class="input-group">
  <input type="text" name="nom_session" placeholder="Nom de la session..." class="form-control" required>
  </div>
</div>

<div class="mb-3">
  <label id="firstcolorletter" for="date_debut">Date de debut</label>
  <div class="input-group">
  <input type="date" name="date_debut" placeholder="" class="form-control" required>
  </div>
</div>

<div class="mb-3">
  <label id="firstcolorletter" for="date_fin">Date de fin</label>
  <div class="input-group">
  <input type="date" name="date_fin" placeholder="" class="form-control" required>
  </div>
</div>

<div class="mb-3">
  <label id="firstcolorletter" for="nb">Nombre de place</label>
  <div class="input-group">
  <input type="number" name="nb" placeholder="Nombre de place..." class="form-control" required>
  </div>
</div>

<hr class="mb-4">

<input type="submit" value="Suivant" class="btn btn-primary btn-lg btn-block" id="buttonnext">

</form>

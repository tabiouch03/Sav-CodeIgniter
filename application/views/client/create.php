<div class="container">
<h1 style="font-family: 'Odibee Sans'; font-size: 56px;" class="text-center mt-5 mb-5"><?php echo $title;?></h1>



<?php echo validation_errors() ?>
<?php echo form_open('client/create'); ?>

<form>
  <div class="form-group">
    <label for="nomClient">Nom du client</label>
    <input type="input" name="nomClient" class="form-control">
  </div>
  <div class="form-group">
    <label for="numClient">N° du client</label>
    <input type="number" name="numClient" class="form-control">
  </div>
  <div class="form-group">
    <label for="adresse">Adresse</label>
    <input type="input" name="adresse" class="form-control">
  </div>
  <div class="form-group">
    <label for="numTel">N° de telephone</label>
    <input type="tel" name="numTel" class="form-control">
  </div>
  <div class="form-group">
    <label for="mail">Adresse Mail</label>
    <input type="mail" name="mail" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary" value="Creer">Ajouter le client</button>
</form>



</div>
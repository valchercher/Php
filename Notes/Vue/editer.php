<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="form-outline">
  <form action="action=editer" method="post">
  <?php foreach ($annes as $annee):?>
  <label class="form-label" for="typeText">Voulez modifier cette Annee</label>
  <input type="hidden" id="typeText" name="id_edite"  class="form-control" value="<?= $annees['id_annee'];?>" />
  <input type="text" id="typeText" name="annee_edite" class="form-control" value="<?= $annees['annee_scolaire'];?>" />
  <input type="submit" value="Valider">
  <?php endforeach ?>
  </form>
</body>
</html>
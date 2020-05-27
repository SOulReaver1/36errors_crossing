<article class="box">
  <h3 class="title">Créer un villageois</h3>

  <?php if (count($villages) > 0): ?>
  <form action="/villager/create" method="POST">
    <input type="text" class="input is-fullwidth" name="name" placeholder="Nom du villageois"><br>
    <select type="text" class="input is-fullwidth" name="village_id">
      <?php foreach($villages as $village): ?>
      
        <option value="<?php echo $village->id;?>"
        ><?php echo $village->getName();?> </option>
      <?php endforeach;?>

    </select>
      <br>
    <button type="submit" class="button is-small is-success">Placer</button>
  </form>
  <?php else: ?>
    <em>Vous devez d'abord créer un village avant de créer un villageois !</em>
  <?php endif ?>
</article>
<div class="column">
  <div class="card">
    <header class="card-header">
      <p class="card-header-title">
        <?php echo $village->getName();?>
      </p>
      <a class="card-header-icon" aria-label="more options">
        <span class="icon">
          <i class="fas fa-city" aria-hidden="true"></i>
        </span>
          &nbsp;
          <?php if ($village->hasFarm()): ?>
            <span class="icon">
            <i class="fas fa-lemon"></i>
            </span>
            &nbsp;  
          <?php endif ?>
          
          <?php if ($village->hasMarket()): ?>
            <span>
            <i class="fas fa-university"></i>
            </span>
            &nbsp;
          <?php endif ?>
        </span>
      </a>
    </header>
    <div class="card-content">
      <div class="content">
        <?php if (count($village->getVillagers())): ?>
          <ul>
            <?php foreach ($village->getVillagers() as $villager): ?>
              <li><?php echo $villager->getSummary();?></li>
            <?php endforeach ?>
          </ul>
        <?php else: ?>  
          <em>Pas de villageois ici</em>
        <?php endif ?>
        <br>
      </div>
    </div>
    <footer class="card-footer">
      <form action="/village/add_market" class="card-footer-item">
        <input type="hidden" name="village_id" value="<?php echo $village->id;?>" />
        <button type="submit" class="button is-primary is-light">
        <span class="icon">
          <i class="fas fa-plus-circle"></i>
        </span>
        <span>Marché</span> </button>
      </form>

      <form action="/village/add_farm" method="POST" class="card-footer-item">
        <input type="hidden" name="village_id" value="<?php echo $village->id;?>" />
        <button type="submit" class="button is-primary is-light">
        <span class="icon">
          <i class="fas fa-plus-circle"></i>
        </span>
        <span>Ferme</span> </button>
      </form>
    </footer>
  </div>
</div>  
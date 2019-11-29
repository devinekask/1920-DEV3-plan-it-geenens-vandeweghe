<section class="dashboard dashboard__home--header">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=pets" class="dashboard__item dashboard__home--green">Pets</a>
        <a href="index.php?page=addpet" class="dashboard__item dashboard__home--red">addpet</a>
        <a href="index.php?page=addevent" class="dashboard__item dashboard__home--orange">addevent</a>
        <a href="index.php?" class="dashboard__item dashboard__home--yellow">Unassigned</a>
        <a href="index.php?" class="dashboard__item dashboard__home--blue">Unassigned</a>
</section>


<!-- Overview of Pets -->
<section class="dashboard dashboard__home--content">
<div class="wrap">
      <h3 class="section__title">Pets</h3>
      <a href="index.php?page=pets" class="viewall">View all</a>
    </div>
    <div class="list__home--pets">
    <?php if(!empty($pets)) : ?>
      <?php foreach ($pets as $pet):?>
            <div class="list__wrapper">
              <img src="" alt="">
              <a href=<?php echo "index.php?page=petdetail&id=" . $pet['id']; ?> class="list__item"><?php echo $pet['name']; ?></a>
            </div>
          <?php if  ($pet['id']=='6') break; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>

<!-- Overview of Events -->
    <div class="wrap">
      <h3 class="section__title">Events</h3>
      <a href="index.php?page=events" class="viewall">View all</a>
    </div>
    <div class="list__home--events">
    <?php if(!empty($events)) : ?>
      <?php foreach ($events as $event):?>
            <div class="list__wrapper">
              <img src="" alt="">
              <a href=<?php echo "index.php?page=eventdetail&id=" . $event['id']; ?> class="list__item"><?php echo $event['name']; ?></a>
            </div>
          <?php if  ($event['id']=='6') break; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>
</section>
</div>

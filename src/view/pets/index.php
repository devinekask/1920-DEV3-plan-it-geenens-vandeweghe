<div>
<section class="dashboard dashboard__home--header">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=pets" class="dashboard__item green">Pets</a>
        <a href="index.php?page=addpet" class="dashboard__item red">addpet</a>
        <a href="index.php?page=addevent" class="dashboard__item orange">addevent</a>
        <a href="index.php?" class="dashboard__item yellow">Unassigned</a>
        <a href="index.php?" class="dashboard__item blue">Unassigned</a>
    </div>
</section>
<section class="dashboard dashboard__home--content">
<!-- Overview of Pets -->
<div class="wrap">
      <h3 class="section__title">Pets</h3>
      <a href="index.php?page=pets" class="viewall">View all</a>
    </div>
    <div class="list__home--pets">
    <?php if(!empty($pets)) : ?>
      <?php foreach ($pets as $pet):?>
            <div class="list__wrapper">
              <img src="" alt="">
              <a href=<?php echo "index.php?page=detail&id=" . $pet['id']; ?> class="list__item"><?php echo $pet['name']; ?></a>
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
      <div class="list__wrapper">
        <img src="" alt="">
        <a href="" class="list__item">Event 1</a>
      </div>
    </div>
</section>
</div>

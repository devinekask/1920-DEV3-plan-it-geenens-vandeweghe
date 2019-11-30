<section class="dashboard dashboard__home--header">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=pets" class="dashboard__item dashboard__home--green">Pets</a>
        <a href="index.php?page=addpet" class="dashboard__item dashboard__home--red">Events</a>
        <a href="index.php?page=addevent" class="dashboard__item dashboard__home--orange">x</a>
        <a href="index.php?" class="dashboard__item dashboard__home--yellow">Add a pet</a>
        <a href="index.php?" class="dashboard__item dashboard__home--purple">Add an event</a>
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
        <a href=<?php echo "index.php?page=petdetail&id=" . $pet['id']; ?> class="link__wrapper">
          <img <?php echo "src=\"./assets/images/pettype" . $pet['type'] . ".jpg\""; ?> width= "100px" height="100px" alt="">
          <?php echo $pet['name']; ?>
        </a>
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
        <a href=<?php echo "index.php?page=eventdetail&id=" . $event['eventid']; ?> class="link__wrapper link__wrapper--events">
          <div class="home-events-image">
            <img src="./assets/images/magnifyingglass.png" width="50px" height="50px" alt="">
          </div>
          <div class="home-events-info">
            <span><?php echo $event['petname']; ?></span>
            <span><?php echo $event['eventname']; ?></span>
            <span><?php echo $time = date('H:ia',strtotime($event['date']));?></span>
            <span><?php echo $date = date('dS M Y ',strtotime($event['date']));?></span>
          </div>

          <div class="home-events-reminder">
            <img src="./assets/images/magnifyingglass.png" width="25px" height="25px" alt="">
          </div>
        </a>
          <?php if  ($event['id']=='6') break; ?>
        <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>

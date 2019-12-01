<p class="title">Order events by</p>
<div class="content-wrapper">
<section class="dashboard dashboard__events--header">
    <h2 class="hidden">Dashboard</h2>
    <a href="index.php?page=" class="dashboard__item dashboard__events--orange">All events</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--green">This week</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--red">This month</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--blue">🍼</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--yellow">💊</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--purple">💉</a>
</section>


<section class="dashboard dashboard__events--content">
    <div class="list__events--events">
    <?php if(!empty($events)) : ?>
        <?php foreach ($events as $event):?>
          <a href=<?php echo "index.php?page=eventdetail&id=" . $event['eventid']; ?> class="link__wrapper link__wrapper--events">
            <div class="home-events-image">
              <img src="./assets/images/magnifyingglass.png" width="50px" height="50px" alt="">
            </div>
            <div class="home-events-info">
              <span class="link__wrapper--name"><?php echo $event['petname']; ?></span>
              <span><?php echo $event['eventname']; ?></span>
              <span><?php echo $time = date('H:ia',strtotime($event['date']));?></span>
              <span><?php echo $date = date('dS M Y ',strtotime($event['date']));?></span>
            </div>

            <div class="home-events-reminder">
              <img src="./assets/images/magnifyingglass.png" width="25px" height="25px" alt="">
            </div>
          </a>
          <?php endforeach; ?>
      <?php endif; ?>
</div>
</section>
</div>

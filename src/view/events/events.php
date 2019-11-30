<p>Order events by</p>
<section class="dashboard dashboard__events--header">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=" class="dashboard__item dashboard__events--green">This week</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--blue">🍼</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--yellow">💊</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--red">This month</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--orange">All events</a>
        <a href="index.php?page=" class="dashboard__item dashboard__events--purple">💉</a>
</section>


<section class="dashboard dashboard__events--content">
    <div class="list__events--events">
<?php if(!empty($events)) : ?>
      <?php foreach ($events as $event):?>
            <div class="list__wrapper">
              <img src="" alt="">
              <a href=<?php echo "index.php?page=eventdetail&id=" . $event['eventid']; ?> class="list__item"><?php echo $event['eventname']; ?></a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</section>

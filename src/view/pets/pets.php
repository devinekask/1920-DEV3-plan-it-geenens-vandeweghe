<p>Order pets by</p>
<section class="dashboard dashboard__pets--header">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=pets" class="dashboard__item dashbboard__pets--green">Gender</a>
        <a href="index.php?page=addpet" class="dashboard__item dashboard__pets--red">Age</a>
        <a href="index.php?" class="dashboard__item dashboard__pets--yellow">Type</a>
</section>


<section class="dashboard dashboard__pets--content">
    <div class="list__pets--pets">
<?php if(!empty($pets)) : ?>
      <?php foreach ($pets as $pet):?>
            <div class="list__wrapper">
              <img src="" alt="">
              <a href=<?php echo "index.php?page=detail&id=" . $pet['id']; ?> class="list__item"><?php echo $pet['name']; ?></a>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
</section>

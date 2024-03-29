<p class="black">Order pets by</p>
<div class="content-wrapper">
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
        <a href=<?php echo "index.php?page=petdetail&id=" . $pet['id']; ?> class="link__wrapper">
            <img <?php echo "src=\"./assets/images/pettype" . $pet['type'] . ".svg\""; ?> width= "80px" height="80px" alt="">
            <?php echo $pet['name']; ?>
          </a>
      <?php endforeach; ?>
    <?php endif; ?>
  </div>
</section>
</div>
<a href="index.php?page=addpet"><span class="add add-pet">+</span></a>

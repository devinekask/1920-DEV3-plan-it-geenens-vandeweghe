<div class="pets_container">

<?php if(!empty($pets)) : ?>
<?php $chunks = array_chunk($data, 6); ?>
<?php foreach($chunks as $pets) : ?>
<?php foreach ($pets as $pet):?>
<article>
  <h3 class="hidden"><?php echo $pet['name']; ?></h3>
<ul class="pet <?php $pet['color'] ?>">
  <li class="pet_image"><?php echo $pet['image']?></li>
  <li class="pet_name"><?php echo $pet['name']?></li>
</ul>
</article>
    <?php endforeach; ?>
    <?php endforeach; ?>
    <?php endif; ?>
    </div>

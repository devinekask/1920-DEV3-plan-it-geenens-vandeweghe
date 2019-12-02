<h2 class="subtitle subtitle--eventdetail"><?php echo $event['name']?></h2>
<section class="eventdetail">
  <h3 class="subtitle--petdetailinfo">Information sheet</h3>
  <div class="petinfo-wrapper">
    <div class="petdetail__image">
      <img <?php echo "src=\"./assets/images/pettypecolor" . $event['petid'] . ".svg\""; ?> width= "80px" height="80px" alt="">
    </div>

    <div class="petdetail__info">
      <div>
        <span class="detail-label detail-label-e">Type of event</span>
        <span class="detail-field detail-field-e">
          <?php switch ($event['type']) {
            case 1:
              echo 'Veterenary appointment';
              break;
            case 2:
              echo 'Medication / Pills';
              break;
            case 3:
              echo 'Vaccination';
              break;
          } ?>
        </span>
      </div>

      <div>
        <span class="detail-label detail-label-e">For</span>
        <span class="detail-field detail-field-e"><?php echo $pet['name'] ?></span>
      </div>

      <div>
        <span class="detail-label detail-label-e">Date</span>
        <span class="detail-field detail-field-e"><?php echo $date = date('dS M Y ',strtotime($event['date']));?></span>
      </div>

      <div>
        <span class="detail-label detail-label-e">Time</span>
        <span class="detail-field detail-field-e"><?php echo $time = date('H:ia',strtotime($event['date']));?></span>
      </div>

      <div>
        <span class="detail-label detail-label-e">Location</span>
        <span class="detail-field detail-field-e"><?php echo $event['location'];?></span>
      </div>

      <div>
        <span class="detail-label detail-label-e">Description</span>
        <span class="detail-field detail-field-e"><?php echo $event['description'];?></span>
      </div>
</section>

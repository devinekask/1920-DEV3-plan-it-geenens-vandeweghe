<h2 class="subtitle subtitle--petdetail"><?php echo $pet['name']?></h2>
<section class="petdetail">
  <h3 class="subtitle--petdetailinfo">Information of <?php echo $pet['name'] ?></h3>
  <div class="petinfo-wrapper">
    <div class="petdetail__image">
    <img <?php echo "src=\"./assets/images/pettypecolorgreen" . $pet['id'] . ".svg\""; ?> width= "160px" height="160px" alt="">
    </div>

    <div class="petdetail__info">
      <div>
        <span class="detail-label-p">Type</span>
        <span class="detail-field-p">
          <?php switch ($pet['type']) {
            case 1:
              echo 'Bird';
              break;
            case 2:
              echo 'Dog';
              break;
            case 3:
              echo 'Cat';
              break;
            case 4:
              echo 'Horse';
              break;
            case 5:
              echo 'Fish';
              break;
            case 6:
              echo 'Other';
              break;
          } ?>
        </span>
      </div>

      <div>
        <span class="detail-label-p">Owner</span>
        <span class="detail-field-p"><?php echo $pet['owner'] ?></span>
      </div>

      <div>
        <span class="detail-label-p">Gender</span>
        <span class="detail-field-p">
        <?php if ($pet['gender'] == 0) {
          echo 'Male';
        } elseif ($pet['gender'] == 1) {
          echo 'Female';
        }else{
          echo 'Not specified';
        }
        ?></span>
      </div>

      <div>
        <span class="detail-label-p">Birthday</span>
        <span class="detail-field-p"><?php echo $bday = date('dS F Y', strtotime($pet['birthday'])) ?></span>
      </div>

      <div>
        <span class="detail-label-p">Chipid</span>
        <span class="detail-field-p"><?php echo $pet['chipid'] ?></span>
      </div>
    </div>
  </div>
  <a <?php echo "href=\"index.php?page=updatepet&id=" . $pet['id'] . "\"" ?> class="float">update details</a>
  <h3 class="subtitle--petdetailevents">Upcomming events for <?php echo $pet['name'] ?></h3>
  <?php if(!empty($events)) : ?>
      <?php foreach ($events as $event):?>
        <a href=<?php echo "index.php?page=eventdetail&id=" . $event['id']; ?> class="link__wrapper link__wrapper--events">
          <div class="home-events-image">
            <img src="./assets/images/magnifyingglass.png" width="50px" height="50px" alt="">
          </div>
          <div class="home-events-info">
            <span class="link__wrapper--name"><?php echo $pet['name']; ?></span> <!-- naam uit pets binnenhalen -->
            <span class="link__wrapper--text"><?php echo $event['name']; ?></span>
            <span class="link__wrapper--text"><?php echo $time = date('H:ia',strtotime($event['date']));?></span>
            <span class="link__wrapper--text"><?php echo $date = date('dS M Y ',strtotime($event['date']));?></span>
          </div>

          <div class="home-events-reminder">
            <img src="./assets/images/magnifyingglass.png" width="25px" height="25px" alt="">
          </div>
        </a>
        <?php endforeach; ?>
    <?php endif; ?>
</section>

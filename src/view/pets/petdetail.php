<h2 class="subtitle subtitle--petdetail"><?php echo $pet['name']?></h2>
<section class="petdetail">
  <h3 class="subtitle--petdetailinfo">Information of <?php echo $pet['name'] ?></h3>
  <div class="petinfo-wrapper">
    <div class="petdetail__image">
      <img src="" alt="">
    </div>

    <div class="petdetail__info">
      <div>
        <span class="detail-label">Type</span>
        <span class="detail-field">
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
        <span class="detail-label">Owner</span>
        <span class="detail-field"><?php echo $pet['owner'] ?></span>
      </div>

      <div>
        <span class="detail-label">Gender</span>
        <span class="detail-field">
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
        <span class="detail-label">Birthday</span>
        <span class="detail-field"><?php echo $pet['birthday'] ?></span>
      </div>

      <div>
        <span class="detail-label">Chipid</span>
        <span class="detail-field"><?php echo $pet['chipid'] ?></span>
      </div>
    </div>
  </div>
  <h3 class="subtitle--petdetailevents">Upcomming events for <?php echo $pet['name'] ?></h3>
</section>

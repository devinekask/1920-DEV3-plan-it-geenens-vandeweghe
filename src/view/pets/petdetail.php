<section class="petdetail">
  <div>
    <h2><?php echo $pet['name']?></h2>
    <img src="" alt="">
  </div>

  <div>
    <div>
      <span>Type</span>
      <span>
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
      <span>Owner</span>
      <span><?php echo $pet['owner'] ?></span>
    </div>

    <div>
      <span>Gender</span>
      <span>
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
      <span>Birthday</span>
      <span><?php echo $pet['birthday'] ?></span>
    </div>

    <div>
      <span>Chipid</span>
      <span><?php echo $pet['chipid'] ?></span>
    </div>
  </div>
</section>

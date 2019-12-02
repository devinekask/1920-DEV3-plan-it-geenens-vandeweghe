<form >
<input type="hidden" name="action" value="updatePetById">
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
        <span class="detail-field"><?php echo $bday = date('dS F Y', strtotime($pet['birthday'])) ?></span>
      </div>

      <div>
        <span class="detail-label">Chipid</span>
        <span class="detail-field"><?php echo $pet['chipid'] ?></span>
      </div>
    </div>


    </form>

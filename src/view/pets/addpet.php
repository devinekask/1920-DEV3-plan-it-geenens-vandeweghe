<ol id="petList">
</ol>
<?php
if (!empty($insertPetResult)) {
?>
  <p>Your pet has been added!</p>
<?php
} else {
  if (!empty($errors)) {
    echo '<div class="error">Gelieve de verplichte velden in te vullen</div>';
  }
?>
<form id="insertPetForm" method="post" action="index.php">
  <input type="hidden" name="action" value="inserPet" />
  <div>
    <label for="inputText">text:</label>
    <input type="text" id="inputText" name="text" value="<?php
    if (!empty($_POST['text'])) {
      echo $_POST['text'];
    }
    ?>" />
    <span class="error error--text"><?php if (!empty($errors['text'])) echo $errors['text'];?></span>
  </div>
  <div>
    <button type="submit">Add Pet</button>
  </div>
</form>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetPlanner - <?php echo $title; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <!-- Header -->
    <header>
    <div class="centerd">
      <a class="center">Dashboard</a>
      <a class="search">Search</a>
      <a class="profile">Profile</a>
    </div>
  </header>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>


  <!-- Content -->
<section class="players">
    <h2 class="hidden">Dashboard</h2>
      <div class="dashboard">
        <a href="index.php?page=addevent" class="dashboard__item green">Paw</a>
        <a href="index.php?page=addpet" class="dashboard__item red">Pets</a>
        <a href="index.php?page=index" class="dashboard__item orange">idk</a>
        <a href="index.php?page=pets" class="dashboard__item yellow">pets</a>
        <a href="index.php?page=pet" class="dashboard__item blue">pet</a>
    </div>
        <?php echo $content;?>
        </section>
    <?php echo $js; ?>
  </body>
</html>


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
    <section class="dashboard">
    <h2 class="hidden">Dashboard</h2>
        <a href="index.php?page=pets" class="dashboard__item green">Pets</a>
        <a href="index.php?page=addpet" class="dashboard__item red">addpet</a>
        <a href="index.php?page=addevent" class="dashboard__item orange">addevent</a>
        <a href="index.php?" class="dashboard__item yellow">Unassigned</a>
        <a href="index.php?" class="dashboard__item blue">Unassigned</a>
    </div>
    </section>
    <section class="content">
        <?php echo $content;?>
    </section>


        <!-- Footer/Navigation -->
  <footer>
    <a href="index.php?page=index" class="active">
      <img src="./assets/images/homeselected.svg" alt="home">
    </a>
    <a href="index.php?page=pets">
      <img src="./assets/images/pets.svg" alt="pets">
    </a>
    <a href="index.php?page=events">
      <img src="./assets/images/calendar.svg" alt="calendar">
    </a>
  </footer>
    <?php echo $js; ?>
  </body>
</html>


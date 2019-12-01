<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PetPlanner - <?php echo $_GET['page']; ?></title>
    <?php echo $css;?>
  </head>
  <body>
    <!-- Header -->
    <header>
    <div class="centerd">
      <h1 class="center"><?php switch ($_GET['page']) {
        case 'home';echo "Dashboard";break;
        case 'pets';echo "All Pets";break;
        case 'events';echo "All Events";break;
        case 'petdetail';echo "Details of a pet";break;
        case 'eventdetail';echo "Details of an event";break;
        case 'addpet';echo "Add a pet";break;
        case 'addevent';echo "Add an event";break;
        }?></h1>
      <div class="center__wrap">
        <a class="profile"><img src="/assets/images/profile.png" width="35px" height="35px" alt="profile"></a>
      </div>
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
    <section class="content">
        <?php echo $content;?>
    </section>


        <!-- Footer/Navigation -->
  <footer>
    <a href="index.php?page=index">
      <img src=<?php if ($_GET['page'] == "home") {echo "\"./assets/images/blackhomeselected.svg\"";} else {echo "\"./assets/images/blackhome.svg\"";} ?> alt="home">
    </a>
    <a href="index.php?page=pets">
      <img src=<?php if ($_GET['page'] == "pets") {echo "\"./assets/images/blackpetsselected.svg\"";} else {echo "\"./assets/images/blackpets.svg\"";} ?> alt="pets">
    </a>
    <a href="index.php?page=events" <?php if ($_GET['page'] == "events" || empty($_GET['page'])) {echo "class=\"active\"";} ?>>
      <img src=<?php if ($_GET['page'] == "events") {echo "\"./assets/images/blackcalendarselected.svg\"";} else {echo "\"./assets/images/blackcalendar.svg\"";} ?> alt="calendar">
    </a>
  </footer>
    <?php echo $js; ?>
  </body>
</html>

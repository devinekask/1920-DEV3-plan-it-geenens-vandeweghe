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
      <h1 class="center"><?php echo $_GET['page']?></h1>
      <div class="center__wrap">
        <a class="search"><img src="/assets/images/magnifyingglass.png" width="35px" height="35px" alt="picture of magnifying glass"></a>
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
    <a href="index.php?page=index" class="active">
      <img src="./assets/images/blackhomeselected.svg" alt="home">
    </a>
    <a href="index.php?page=pets">
      <img src="./assets/images/blackpets.svg" alt="pets">
    </a>
    <a href="index.php?page=events">
      <img src="./assets/images/blackcalendar.svg" alt="calendar">
    </a>
  </footer>
    <?php echo $js; ?>
  </body>
</html>

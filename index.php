
<?php 
  include __DIR__ . '/database.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <div class="container">
    
    <?php 
      foreach ($dischi as $disco) { ?>
        <img src="<?php echo $disco['poster']?>" alt="">
        <h2><?php echo $disco['title'] ?></h2>
        <p><?php echo $disco['author'] ?></p>
        <p><?php echo $disco['year'] ?></p>
        <hr>
      <?php }
    ?>

  </div>

</body>
</html>

  

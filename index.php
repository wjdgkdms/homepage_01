<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<h1>
<a href="index.php">silver</a></h1>

<h3 align="right"><a href="login.php">join</a></h3>
<hr>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <ol>
      <?php
      print_list();
      ?>
    </ol>
    <a href="create.php">create</a>
    <h2>
      <?php
      print_title();
      ?>
    </h2>
    <?php
    print_description();
     ?>

  </body>
</html>

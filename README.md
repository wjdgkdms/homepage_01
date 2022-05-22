# homepage_01
index 및 로그인창 구연하기
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
</html> //index

  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="login.php">Login</a></h1><h3 align="right"><a href="index.php">home</a></h3>
    <hr>
    
    <form method="post" action="database.php">
    <div>
            <div class="int-area">
                <input type="text" name="id" id="id"
                autocomplete="off" required>
                <label for="id"> ID </label>
            </div>
            <div class="int-area">
                <input type="password" name="pw" id="pw"
                autocomplete="off" required>
                <label for="pw"> PASSWORD </label>
            </div>
            <div class = "btn-area">
                <input type="submit" value="login">
            </div>
    </div>
    </form>

<h3><a href="join.php">sign up</a></h3>


</body>
</html>
  

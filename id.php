
<?php


if (isset($_POST['generate_id'])) {
  $name     = $_POST['name'];
  $phone    = $_POST['phone'];
  $email    = $_POST['email'];
  $course   = $_POST['course'];
  $batch    = $_POST['batch'];
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="id.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
</head>

<body>
<body class='bg-grid-line'></body>
<div class='card'>
  <header>
    <h1>Imran IT SID</h1>
  </header>
  <article>
    <img alt='My Pic' id='thumb' src='https://s.cdpn.io/1202/timpietrusky_on_rampage_small_1.jpg'>
    <h2><?php if(isset($name)){echo $name;} ?></h2>
    <div class='area'>
      <h3><?php if(isset($course)){echo $course;} ?></h3>
      <ul>
        <li>
         <?php  if(isset($phone)){echo $phone;} ?>
        </li>
        <li>
          <?php if(isset($email)){echo $email;} ?>
        </li>
        <li>
          <?php if(isset($batch)){echo $batch;} ?>
        </li>
      </ul>
      
    </div>
  </article>
</div>


    
</body>

</html>
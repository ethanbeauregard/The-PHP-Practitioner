<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <ul>
    <?php foreach($tasks as $task) : ?>

      <?php foreach($task as $key => $val) : ?>
        <li><strong><?= $key ?></strong>: <?= $val ?></li>
      <?php endforeach ?>

    <?php endforeach ?>
  </ul>
  
</body>
</html>
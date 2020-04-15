<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <ul>
    <li>
      <strong>Task: </strong> <?= $task['title']; ?>
    </li>

    <li>
      <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>

    <li>
      <strong>Assigned To: </strong> <?= $task['assigned to']; ?>
    </li>

    <li>
      <strong>Status: </strong> <?= $task['completed'] ? 'Completed' : 'Incompleted'; ?>
    </li>
  </ul>
  
</body>
</html>
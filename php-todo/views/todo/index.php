<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  </head>
<body class="p-4">

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Title</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
      <th scope="col">Completion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($todos as $todo): ?>
    <tr>
      <th scope="row"><?= htmlspecialchars($todo->id) ?></th>
      <td><?= htmlspecialchars($todo->title) ?></td>
      <td><a class="btn btn-sm btn-primary" href="/php-todo/edit/<?= $todo->id ?>">Edit</a></td>
      <td><a class="btn btn-sm btn-danger" href="/php-todo/delete/<?= $todo->id ?>">Delete</a></td>
      <td>
        <form action="/php-todo/complete_task/<?= $todo->id ?>" method="post" style="display: inline;">
          <button type="submit" class="btn btn-sm btn-success">
            <?php echo $todo->completed ? 'Completed' : 'Complete'; ?>
          </button>
        </form>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a class="btn btn-success mt-3" href="/php-todo/create">Create task here</a>

</body>
</html>

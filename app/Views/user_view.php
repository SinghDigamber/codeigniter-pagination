<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Codeigniter 4 Pagination Example - positronx.io</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
  <div class="container mt-5">
    <div class="mt-3">
      <table class="table table-bordered" id="users-list">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['name']; ?></td>
            <td><?php echo $user['email']; ?></td>
          </tr>
          <?php endforeach; ?>
          <?php endif; ?>
        </tbody>
      </table>

      <!-- Pagination -->
      <div class="d-flex justify-content-end">
        <?php if ($pager) :?>
        <?php $pagi_path='index.php/users'; ?>
        <?php $pager->setPath($pagi_path); ?>
        <?= $pager->links() ?>
        <?php endif ?>
      </div>

    </div>
  </div>
</body>
</html>
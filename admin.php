<?php
// AUTH CHECK
if (!isset($_GET['user']) || !isset($_GET['pass']) || $_GET['user'] !== 'admin' || $_GET['pass'] !== 'admin') {
    http_response_code(403);
    echo "<h1 style='color:red; text-align:center; margin-top:50px;'>Access Denied</h1>";
    exit;
}

// DB CONNECTION
$host = "localhost";
$username = "root";
$password = "";
$database = "my_restaurant";

// Connect to DB
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$sql = "SELECT * FROM contact_messages ORDER BY submitted_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Contact Messages - Admin</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container my-5">
  <h2 class="text-warning mb-4">Admin Panel - Contact Messages</h2>

  <?php if ($result && $result->num_rows > 0): ?>
    <div class="table-responsive">
      <table class="table table-dark table-bordered table-hover">
        <thead class="table-warning text-dark">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Submitted At</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= htmlspecialchars($row['id']) ?></td>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
              <td><?= $row['submitted_at'] ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php else: ?>
    <div class="alert alert-info">No messages found.</div>
  <?php endif; ?>

</div>

</body>
</html>

<?php $conn->close(); ?>

<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$user = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $conn->query("UPDATE users SET name='$name', email='$email', phone='$phone' WHERE id=$id");
  header("Location: index.php");
}
?>
<form method="POST">
  <h2>Edit User</h2>
  Name: <input type="text" name="name" value="<?= $user['name'] ?>" required><br><br>
  Email: <input type="email" name="email" value="<?= $user['email'] ?>" required><br><br>
  Phone: <input type="text" name="phone" value="<?= $user['phone'] ?>" required><br><br>
  <input type="submit" value="Update">
</form>

<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $conn->query("INSERT INTO users (name, email, phone) VALUES ('$name', '$email', '$phone')");
  header("Location: index.php");
}
?>
<form method="POST">
  <h2>Add New User</h2>
  Name: <input type="text" name="name" required><br><br>
  Email: <input type="email" name="email" required><br><br>
  Phone: <input type="text" name="phone" required><br><br>
  <input type="submit" value="Save">
</form>

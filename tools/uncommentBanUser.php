<?php
include '../config/bettergdps.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['password'] === $password) {
      $username = $_POST['username'];
      $filePath = '../config/comment_bans.txt';
      $bannedUsers = file_get_contents($filePath);
      $bannedUsers = str_replace($username, '', $bannedUsers);
      $bannedUsers = trim(preg_replace('/\s+/', ' ', $bannedUsers));
      file_put_contents($filePath, $bannedUsers);
      echo 'User successfully unbanned.';
    } else {
        die("unauthorized");
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Unban User</title>
</head>
<body>
    <h1>Unban User</h1>
    <form method="post" action="uncommentBanUser.php">
        <label for="username">Target Username: </label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="username">GDPS Password: </label>
        <input type="text" id="password" name="password" required><br><br>
        <input type="submit" value="Unban User">
    </form>
</body>
</html>

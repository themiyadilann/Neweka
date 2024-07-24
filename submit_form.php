<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = htmlspecialchars($_POST['firstname']);
  $lastName = htmlspecialchars($_POST['lastname']);
  $email = htmlspecialchars($_POST['email']);

  // Simple validation (you can add more)
  if (!empty($firstName) && !empty($lastName) && !empty($email)) {
    echo "Thank you, $firstName $lastName. Your email address is $email.";
  } else {
    echo "All fields are required.";
  }
} else {
  echo "Invalid request method.";
}
?>

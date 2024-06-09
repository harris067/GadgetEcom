<?php
  session_start();
  $email=$_POST['email'];
  if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    // Handle invalid email
    $_SESSION['error'] = "Please enter a valid email address.";
    
}

else{
  $ur=$_POST['ur'];
  $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
  //Connecting to database now
  $conn=new mysqli('localhost','root','','login');
  if($conn->connect_error){
    die('Connection Failed'.$conn->connect_error);
  }
  else{
    $stmt=$conn->prepare("insert into signup(username,email,password) values(?,?,?)");
    $stmt->bind_param("sss",$ur,$email,$password);
    $stmt->execute();
  }
    if($stmt->affected_rows>0){
      $_SESSION['username']=$ur;
      
      $to = $email;
    $subject = 'Welcome to our website';
    $message = 'Hello ' . $ur . ',\n\nThank you for signing up on our website.';
    $headers = 'From: your_email@example.com' . "\r\n" .
        'Reply-To: your_email@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);


      header("location:home.php");
      exit();
    }
      else{
        header("location:home.php");
        exit();
      }

    $stmt->close();
    $conn->close();
    }
?>

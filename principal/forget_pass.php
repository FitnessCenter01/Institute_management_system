<?php

require_once('db.php'); // include database configuration file

if(isset($_POST['submit'])) {
        $email = $_POST['email'];
        $sql=mysqli_query($con,"select * from `principal` where `email`='$email'");

        if($rowdb=mysqli_fetch_array($sql))
        {
            $random_password = 'http://localhost/institute_management_system/Principal/for_link.php';
            $hashed_password = password_hash($random_password, PASSWORD_DEFAULT); // hash the password
            ini_set('SMTP', 'smtp.gmail.com');
            ini_set('smtp_port', '587');
            $headers = 'From: omkhandre18@gmail.com' . "\r\n" .
           'Reply-To: omkhandre18@gmail.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();
            $to = $email;
            $subject = "Mail for verification";
            $message = "Your verficiation code: $random_password";
            mail($to, $subject, $message,$headers);

            
        }

        
     
}
?>

<form method="post">
    <input type="email" name="email" placeholder="Email" required>
    <button type="submit" name="submit">Reset Password</button>
</form>

<?php if(isset($error_message)): ?>
    <div class="error"><?php echo $error_message; ?></div>
<?php endif; ?>

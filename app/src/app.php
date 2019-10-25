<?php
if (isset($_POST['submit'])){
$vardas = trim($_POST['vardas']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$telephone = trim($_POST['telephone']); 

if(!empty($vardas) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL))  {
        $from = "$email";
        $to = "dikobriz@gmail.com";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: ' . $vardas . ', ' . $email;
        $zinute = htmlspecialchars($message);
        $telephone = "$telephone";
        /* mail($to, $subject, $autorius, $zinute, $telephone, $from);*/
        echo "<script>alert('Dekojame, Jusu zinute gavome.');</script>";    
    }
}
include ('db.php');
}
?>
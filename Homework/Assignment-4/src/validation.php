<?php 

    if($_COOKIE['student_email']) {
        echo "<h3>Welcome Back " . explode("@", $_COOKIE['student_email'])[0] . "</h3>";
    }

    $year = $_POST['year']; 
    $medium = $_POST['medium'];
    $email = $_POST['email'];
    $file = $_FILES['fileToUpload']['name'];
    $fileTMP = $_FILES['fileToUpload']['tmp_name'];
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    $type = $_POST['type'];

    $year_error = NULL;
    $medium_error = NULL;
    $email_error = NULL;
    $file_error = NULL;
    
    $destination = "./uploads/" . $_FILES['fileToUpload']['name'];

    if(!preg_match('/[0-9]{4}/', $year)) {
        $year_error = true;
    }
            
    if(!preg_match('/[a-zA-Z]/', $medium)) {
        $medium_error = true;
    }
            
    if(!preg_match('/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/', $email)) {
        $email_error = true;
    }
                        
    if($type == 1) {
        if ($extension != "tgz") {
            $file_error = '* please submit a .tgz file format';
        }
    }
                        
    else if($type == 2){
        if ($extension != "zip") {
            $file_error =  '* please submit a .zip file format';
        }
    }   

    if(!move_uploaded_file($fileTMP, $destination)) {
        $file_error = "* failed to upload";
    }

    file_put_contents("./uploads/log.csv", $email . ", " . $medium . ", " . $year . "\n", FILE_APPEND);
    move_uploaded_file($_FILES['tmp_name'], "./uploads/" . $_FILES['name']);
    
    setcookie('student_email', $email, time() + (86400 * 2)); // 86400 = 1 day
    
    if($year_error == NULL && $medium_error == NULL && $email_error == NULL && $file_error == NULL) {
        header('HTTP/1.1 301 Moved Permanently');
        header('Location: submitted.php');
    }
    
    include('lark-form.php'); 

?>

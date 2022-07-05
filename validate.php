<?php
 
include_once('connection.php');
  
function test_input($data) {
     
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
  
    $stmt = $conn->prepare("SELECT * FROM adminlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
     
    foreach($users as $user) {
         
        if(($user['username'] == $username) &&
            ($user['password'] == $password)&&
            ($user['isActive'] ==  true)) {
                session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            $_SESSION['success'] = "You have logged in";
                            // Redirect user to welcome page
                            
                header("location: dashboard1.php");
        }
        else {
            echo "<script>alert('wrong information or not an active user!!!'); window.location='8a6544278ebe9e78ea831d31eb570b73devlineage.php'</script>";
            
            die();
           
        }
    }
}
 
?>
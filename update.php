<?php
    require_once 'dBConfig.php';
 
    if(ISSET($_POST['update'])){
        try{
            $id = $_GET['id'];
            $text = $_POST['text'];
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `user`SET `text` = '$text' WHERE `user_id` = '$id'";
            $conn->exec($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
 
        $conn = null;
 
        echo "<script>alert('Succesfully updated the text!')</script>";
        echo "<script>window.location='Dashboard1.php'</script>";
    }
?>
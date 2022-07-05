<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: 8a6544278ebe9e78ea831d31eb570b73devlineage.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
    </head>
<body>
    
        <div class="col-md-6">
            <?php
                if(ISSET($_GET['id'])){
                    require_once 'dbConfig.php';
                    $id = $_GET['id'];
                    $sql = $conn->prepare("SELECT * FROM `user` WHERE `user_id`='$id'");
                    $sql->execute();
                    $row = $sql->fetch();
                }
            ?>
            <form method="POST" action="update.php?id=<?php echo $id?>">
            <div class="form-group">
                    <label>applied</label>
                    <?php echo $row['applied']?>
                </div>
                <br>
                <div class="form-group">
                    <label>text</label>
                    <input class="form-control" type="text" value="<?php echo $row['text']?>" name="text"/>
                </div>
                <br>
                <div class="form-group">
                    <button class="btn btn-warning form-control" name="update">Save Changes</button>
                </div>
            </form>
            <?php
                $conn = null;
            ?>
        </div>
    </div>
 
</body>
 
</html>
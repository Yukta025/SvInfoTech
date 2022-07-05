<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: 8a6544278ebe9e78ea831d31eb570b73devlineage.php");
    exit;
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SV Info Tech</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="css12/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
     
        <link rel="stylesheet" type="text/css" href="css12/DT_bootstrap.css">
		
        <link href="modal/css1/bootstrap1.css" rel="stylesheet" type="text/css" media="screen">
  <link href="assets/css/ninja-slider.css" rel="stylesheet" />
  <script src="assets/js/ninja-slider.js " type="text/javascript"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

  <!--  Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 100vh;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 35px 22px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 100vh;
  background-color: #154c79;
  color: white;
}
.tabhead{
  padding: 35px 22px;
}
.error {
    width: 92%;
    margin: 0px auto;
    padding: 10px;
    border: 1px solid #a94442;
    color: #a94442;
    background: #f2dede;
    border-radius: 5px;
    text-align: left;
}
.success {
    color: #3c763d;
    background: #dff0d8;
    border: 1px solid #3c763d;
    margin-bottom: 20px;
}
</style>
</head>
<script src="modal/js1/jquery1.js" type="text/javascript"></script>
<script src="modal/js1/bootstrap1.js" type="text/javascript"></script>



<script src="js12/jquery.js" type="text/javascript"></script>
<script src="js12/bootstrap.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8" language="javascript" src="js12/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8" language="javascript" src="js12/DT_bootstrap.js"></script>
<body>


<div class="tab">
  <div class="tabhead">
<h2>SV Info Tech</h2>
<p>Admin Panel</p><br></div>
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Dashboard</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Admin</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Website Image Data</button>
  <button class="tablinks" onclick="openCity(event, 'delhi')">Website Text Data</button>
</div>

<div id="London" class="tabcontent">
<?php if (isset($_SESSION['success'])) : ?>
            <div class="error success" >
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
  <h3>welcome! to your Dashboard</h3>
  <p>Edit data of website in website image data and website text data tab.</p>
  
</div>

<div id="Paris" class="tabcontent">
  <h3>Hello!  <?php echo $_SESSION['username']; ?> </h3>
  <p>This is your profile page.</p> 
  <a class="btn btn-warning" href="Logout.php">Logout</a>
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Edit Your website</h3><br>
  <h4>Image Data Table</h4>
  <table class="table table-hover text-white">
  <thead>
    <tr>
      
      <th scope="col">Image</th>
      <th scope="col">Applied</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
								require_once('dbConfig.php');
								$result = $conn->prepare("SELECT * FROM tbl_image ORDER BY tbl_image_id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								$id=$row['tbl_image_id'];
							?>
    <tr>
     
      <td><?php if($row['image_location'] != ""): ?>
									<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?> </td>
      <td><?php echo $row ['applied']; ?></td>
      <td><a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-warning" >Update Image</a>
								</td>
    </tr>
    <!-- Modal -->
    <div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-header">
							<h3 id="myModalLabel">Update</h3>
							</div>
							<div class="modal-body">
							<div class="alert alert-danger">
							<?php if($row['image_location'] != ""): ?>
							<img src="uploads/<?php echo $row['image_location']; ?>" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php else: ?>
							<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333; margin-left: 30px;">
							<?php endif; ?>
							<form action="upload.php<?php echo '?tbl_image_id='.$id; ?>" method="post" enctype="multipart/form-data">
							<div style="color:blue; margin-left:150px; font-size:30px;">
								<input type="file" name="image" style="margin-top:-115px;">
							</div>
							
							</div>
							<hr>
							<div class="modal-footer">
							<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
							<button type="submit" name="submit" class="btn btn-danger">Yes</button>
							</form>
							</div>
							</div>
							</div>
								<?php } ?>
  </tbody>
</table><br><br>



</div>



<div id="delhi" class="tabcontent">
<h4>Text Data Table</h4>
  <table class="table table-hover text-white">
  <thead>
    <tr>
      <th scope="col">Applied</th>
      <th scope="col">Text</th>
      <th scope="col">Edit</th>
    </tr>
  </thead>
  <tbody>
  <?php
                    require 'dbConfig.php';
                    $sql = $conn->prepare("SELECT * FROM `user` ORDER BY `user_id` ASC");
                    $sql->execute();
                    while($row = $sql->fetch()){
                    ?>
    <tr>

      <td><?php echo $row['applied']?></td>
      <td><?php echo $row['text']?></td>
      <td><a href="edit.php?id=<?php echo $row['user_id']?>" class="btn btn-warning">Edit</a>
    </td>
    </tr>
    <?php } ?>
  </tbody>
</table><br><br>
<p>For Editing the text the limit is set to 30 characters.</p>
</div>




<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 

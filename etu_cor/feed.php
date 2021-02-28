<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="sidenav1.css" >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
  <style>
  .card{
      width:50%;
      height:50%;
      left:25%;
  }
  .card img{
      width:100%;
      height:100%;
      object-fit: cover;
  }
  </style>
  </head>
  
  <header>
      <div class="nav-extended">
        <nav style="min-height: 100px ">
          <nav class="nav-wrapper black ">
              <a href="#" class="brand-logo  white-text"><h5 ><span>Etudient Corner</span></h5></a> 
              <ul class="right hide-on-med-and-down">
                <li><a href="feed.php"><i class="material-icons white-text right">home</i><span>Feed</span> </a></li>
                <li><a href="index.php"><i class="material-icons white-text right">forum</i><span>Etudient chat</span> </a></li>
                <li><a href="post.php"><i class="material-icons white-text right">notes</i><span>Add post</span></a></li>
                <li><a href="logout.php"><i class="material-icons white-text right">logout</i><span>Logout</span></a></li>
              </ul>
            </nav>
          </nav>
      </div>
      </header>
      <body style="background-image: url('background.jpeg'); background-size:cover"> 
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etu_cor";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn)
{
  die("Connection failed: ".mysql_error());
}
$sql = "SELECT * FROM post";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0) {
	while($row = $result->fetch_assoc()) { ?>
    <br>
        <div class="row">
        <div class="col s12 l12 xl12">
      <div class="card">
        <div class="card-image">
          <?php echo '<img src="data:image/jpg;base64,'.base64_encode($row['image']).'">'; ?>
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          
		<?php echo "<p>".$row['username']." : ".$row['text']."</p><br>"; ?>
        </div>
      </div>
    </div>

  </div><br><?php } } ?>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
</html>
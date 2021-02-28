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
  
::-webkit-file-upload-button {
  background: black;
  color: white;
  padding: 1.5em;
}
.input[type=submit]
{
    color: black;
    background-color: white;
    font-size:20px;
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
             
            </nav>
          </nav>
      </div>
      </header>
<body style="background-image: url('background.jpeg'); background-size: cover; background-repeat: no-repeat">
<div class="row">
	<div id="insert_post" class="col-sm-12">
	<center><h3>ADD POST</h3></center>
	</div>
</div>

<div class="section" ></div>
<center>
              <div class="container">
                <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                    <div class='row'>
                      <div class='input-field col s12'>
                      <center>
        <form class="reg-form center" method="POST" action="post_test.php" enctype="multipart/form-data">
		<textarea class="form-control" style="width: 300px;height: 150px;" id="content" rows="10" name="content" placeholder="Share your knowledge here"></textarea><br><br><br>
        <h6>Choose Image (Optional)</h6>
        <input type="file" name="image" id="image"><br><br>
		</label>
        <input type='submit' name='btn_post' value='POST' class='col s12 btn btn-large'>
		</form>
		</center>
                      </div>
                    </div>

                    <br>
                </div>
              </div>
          </center>

</body>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</html>
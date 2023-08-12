<?php

require_once('include/database.php');
$page_title = "Add Wallpaper";
require_once ('include/header.php');

?>
  <div class="container wrapper">
  <ul class="breadcrumb">
    <li><a href="home.php">Home</a></li>
    <li class="active">Add Wallpaper</li>
  </ul>

  <h1 class="text-center">ADD MOVIE</h1>
  <p class="lead text-center">Please add your desired movie</p>
  <div class="col-xs-8 col-xs-offset-2">
    <form class="form-horizontal" role="form" action="imgprocess.php" method="get" enctype="text/plain">
      <div class="form-group">
        <label for="newImageName" class="col-sm-3 control-label">Title</label>
        <div class="col-sm-9">
          <input type="text" class="form-control" id="newImageName" name="img_name" placeholder="Image Title" required>
        </div>
      </div>
     
      <div class="form-group">
        <label for="newImage" class="col-sm-3 control-label">Image Path</label>
        <div class="col-sm-9">
          <input type="text" id="newImage" class="form-control" name="img_path" placeholder="Enter URL" required>
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="submit" class="btn btn-success">Add Wallppaer</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php
  include('include/footer.php');
?>
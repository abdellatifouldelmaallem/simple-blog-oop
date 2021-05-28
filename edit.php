
<?php 
require './classes/class-bloger.php';
include './templet/header.php';

if(isset($_GET['id'])){
  $id=$_GET['id'];
  $object = new bloger();
  $articleOld = $object->getSingleArticle($id);
  if($articleOld){
    if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $title = $_POST['title'];
      $date = $_POST['date'];
      $content = $_POST['content'];
  
      $image = $_FILES['image']['name'];
      $tmp_dir = $_FILES['image']['tmp_name'];
      $imageSize = $_FILES['image']['size'];
      
      $upload_dir = './upload-images/';
      $imgExt = strtolower(pathinfo($image,PATHINFO_EXTENSION));
      $valid_extansion = array('jpeg','jpg','png');
      $picImage = rand(1000,1000000).".".$imgExt;
      move_uploaded_file($tmp_dir,$upload_dir.$picImage);
  
      $object = new bloger();
      if($object->updateArticle($id,$title, $date, $content,$picImage)){
          header("location:page-table.php");
      }else{
         echo "you have error"; 
      }
    }
    
      $title = $articleOld->title;
      $date = $articleOld->date;
      $content = $articleOld->content;
      $image = $articleOld->image;
    
  }
}






?>



<div class="container">
<div class="row col-6">

<h1 class="text-center">Edit an article</h1>

<div class="mt-5">

<a href="./page-table.php" class="btn btn-primary mb-1">Back</a></div>
<hr>
<form action="./edit.php?id=<?=$id;?>" method="POST" enctype="multipart/form-data" >
  <div class="mb-3">

  <input type="hidden" name="id" value="<?php echo $id ?>">

    <label for="exampleInputEmail1" class="form-label">title :</label>
    <input type="text"  class="form-control" name="title" id="exampleInputEmail1" value="<?php echo $title ?>">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">date :</label>
    <input type="text" class="form-control" name="date" id="exampleInputPassword1" value="<?php echo $date ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">content :</label>
    <input type="text" class="form-control" name="content" id="exampleInputPassword1" value="<?php echo $content ?>">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image :</label>
    <input type="file" class="form-control" name="image" id="exampleInputPassword1" value="<?php echo $image ?>">
    <img src="<?php echo $picImage ?>" alt="">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>













<?php include './templet/footer.php'?>
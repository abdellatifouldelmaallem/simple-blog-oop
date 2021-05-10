
<?php 
require './classes/class-bloger.php';
include './templet/header.php';


if(isset($_POST['submit'])){
  
    $title = $_POST['title'];
    $date = $_POST['date'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    if(!empty($title) && !empty($date) && !empty($content) && !empty($image)){
        $object = new bloger();
        if($object->addArticle($title, $date, $content, $image)){
          header("location:page-table.php");  
        }
    }

  
}
else{
    
}








?>



<div class="container">
<div class="row col-6">

<h1 class="text-center">add an article</h1>

<div class="mt-5">

<a href="./page-table.php" class="btn btn-primary mb-1">Back</a></div>
<hr>
<form action="Add-an-article.php" method="POST" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">title :</label>
    <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">date :</label>
    <input type="text" class="form-control" name="date" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">content :</label>
    <input type="text" class="form-control" name="content" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image :</label>
    <input type="text" class="form-control" name="image" id="exampleInputPassword1">
  </div>

  <div class="col-sm-4">
  <?php if(isset($_POST['submit'])):?>
 <div class="alert alert-dimissible alert-warning">
 <p> <?php echo $error; ?></p>
 </div>
  <?php endif;?>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>
</div>

<?php include './templet/footer.php' ?>










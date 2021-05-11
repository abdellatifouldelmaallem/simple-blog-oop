<?php 
include './classes/class-bloger.php';

$art = new bloger();
$row = $art->getArticle();


 ?>                 
<?php include './templet/header.php' ?>


<div class="container">
	<div class="row">

  <div ><a href="./logout.php" class="btn btn-primary mt-4">log out</a></div>

    <div class="d-flex justify-content-between mt-3">
   <h2>Mangement the articles</h2>
    <a href="./Add-an-article.php" class="btn btn-success  ">Add an article</a>
    </div>

		<div class="span5">
            <table class="table table-striped table-condensed">
                  <thead>
                  <tr>
                      <th>id</th>
                      <th>title</th>
                      <th>date</th>
                      <th>content</th>
                      <th>image</th>                                          
                      <th>actions</th>                                          
                  </tr>
              </thead>   
              <tbody>
              <?php foreach($row as $key=>$data){   ?>
                <tr >
                    <td><?php echo $data->id; ?></td>
                    <td><?php echo $data->title; ?></td>
                    <td><?php echo $data->date; ?></td>
                    <td><?php echo $data->content; ?></td>
                    <td><img src="<?php echo $data->image; ?>" alt=""></td>                                                     
                    <td>
                    <a href="./edit.php?id=<?=$data->id;?>" class="btn btn-primary">Edit</a>
                    <a href="./delete.php?id=<?= $data->id; ?>" class="btn btn-danger delete-user" >Delete</a></td>                                                     
                </tr>  
              <?php } ?>
                                                
              </tbody>
            </table>
            </div>
	</div>
</div>











<?php include './templet/footer.php'?>
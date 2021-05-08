<?php include './classes/class-db-con.php'?>
<?php include './classes/class-bloger.php' ?>                 
<?php include './templet/header.php' ?>


<div class="container">
	<div class="row">

    <div ><a href="logout.php" class="btn btn-primary  mt-4">log out</a></div>
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
                <tr>
                    <td>Donna R. Folse</td>
                    <td>2012/05/06</td>
                    <td>Editor</td>
                    <td>Editor</td>
                    <td>Editor</td>                                                     
                    <td> <a href="" class="btn btn-primary">Edit</a>
                    <a class="btn btn-danger delete-user" >Delete</a></td>                                                     
                </tr>
             
            
                                                
              </tbody>
            </table>
            </div>
	</div>
</div>











<?php include './templet/footer.php'?>
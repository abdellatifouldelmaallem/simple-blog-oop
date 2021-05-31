<?php include './classes/class-bloger.php';

$reads = new bloger();
$id = $_GET['id'];
$read_Once = $reads->getSingleArticle($id);
if ($read_Once) {
    $title=$read_Once->title;
    $image=$read_Once->image;
    $content=$read_Once->content;
    $date=$read_Once->date;
}else{
    echo " you have an error !!!!!";
}


 ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./templet/style.css">
    <title>blog</title>
</head>
<body class="bg-dark ">
    
<div >
<div class=" d-flex flex-row justify-content-around mt-3 ">
<h2><?php echo $title ?></h2>
<img src="./upload-images/<?php echo $image ?>" class="w-25 h-25" alt="image">
</div>

<div class="d-flex flex-row justify-content-around mt-5">
<p class ="text-white w-50 "><?php echo $content ?></p>

<small class="text-white "><?php echo $date ?></small>
</div>

</div>

</body>
</html>



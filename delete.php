
<?php
include_once './classes/class-bloger.php';
$object = new bloger();
$id = $_GET['id'];
if($object->deleteArticle($id)){
    header("location:page-table.php");
}else{
    echo "sorry you have a pronlem";
}


?>
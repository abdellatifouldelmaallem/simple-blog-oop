<?php 

class bloger extends data {


  // methode to get article
    public function getArticle(){

        $sql = $this->conn->prepare("SELECT * FROM article");
        if($sql->execute()){
            return $sql->fetchAll();
        }else{
            false;
        }

    }

    // methode to delete article
    public function deleteArticle($id){

        $sql = $this->conn->prepare("DELETE FROM article WHERE id=:id");
        $sql->bindParam(":id",$id);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }

    }

    // methode to add article
    public function addArticle($title, $date, $content,$image){
        $sql = $this->conn->prepare("INSERT INTO article (title,date,content,image) VALUES (:title,:date,:content,:image)");
        $sql->bindParam(':title',$title);
        $sql->bindParam(':data',$date);
        $sql->bindParam(':content',$content);
        $sql->bindParam(':image',$image);

        if($sql->execute()){
            return $this->conn->lastInsertId();
        }else{
            return false;
        }

    }

    //methode to update an article
    public function updateArticle($title, $data, $content,$image){

        $sql = $this->conn->prepare("UPDATE article SET title=:title, date=:date, content=:content, image=:image WHERE id=:id ");
        $sql->bindParam(":id",$id);
        $sql->bindParam(":title",$title);
        $sql->bindParam(":date",$date);
        $sql->bindParam(":content",$content);
        $sql->bindParam(":image",$image);

        if($sql->execute()){
            return true;
        }else{
            return false;
        }
        
    }



}
?>
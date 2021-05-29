<?php 
include 'class-db-con.php';
class bloger extends data {


  // methode to get articles
    public function getArticle(){

        $sql = $this->conn->prepare("SELECT * FROM article");
        if($sql->execute()){
            return $sql->fetchAll(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    // methode to delete article
    public function deleteArticle($id){

        $sql = $this->conn->prepare("DELETE FROM article WHERE id=:id");
        $sql->bindParam(":id",$id,PDO::PARAM_INT);
        return $sql->execute();
    }

    // methode to add article
    public function addArticle($title, $date, $content,$image){
        try {
            $sql = $this->conn->prepare("INSERT INTO article (title,date,content,image) VALUES (:title,:date,:content,:image)");
            $sql->bindParam(':title',$title,PDO::PARAM_STR);
            $sql->bindParam(':date',$date,PDO::PARAM_STR);
            $sql->bindParam(':content',$content,PDO::PARAM_STR);
            $sql->bindParam(':image',$image,PDO::PARAM_STR);

            if($sql->execute()){
                
                return $this->conn->lastInsertId();
            }else{
                return false;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }

    }

    //methode to update an article
    public function updateArticle($id,$title, $date, $content,$image){

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

    // methode to getSingleArticle
    public function getSingleArticle($id){
        $sql = $this->conn->prepare("SELECT * FROM article WHERE id=:id");
        $sql->bindParam(":id",$id);
        if($sql->execute()){
            return $sql->fetch(PDO::FETCH_OBJ);
        }else{
            return false;
        }
    }



}
?>
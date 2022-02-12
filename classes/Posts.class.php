<?php

class Posts extends Dbh{
    public function getPosts(){
        $sql="SELECT * FROM posts";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll())
        {
            return $result;
        }
    }

    public function addPost($title, $body, $author){
       $sql="INSERT INTO posts(title, body, author) VALUE (?, ?, ?)";
       $stmt = $this->connect()->prepare($sql);
       $stmt->execute([$title, $body, $author]);

    //    header("Location: index.php");
     
    }


    public function editPost($id){
        $sql="SELECT * FROM posts WHERE id = ?";
        $stmt= $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result= $stmt->fetch();

        return $result;

    }
    public function updatePost($title, $body, $author, $id){
        $sql="UPDATE posts SET title=?, body=?, author=? WHERE id=? ";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$title, $body, $author, $id]);
       
    }

    public function deletePost($id){
        $sql="DELETE  from posts WHERE id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$id]);

    }

}


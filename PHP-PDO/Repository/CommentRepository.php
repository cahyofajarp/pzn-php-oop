<?php 
namespace Repository{

use Model\Comment;

    interface CommentRepository{

            function insert(Comment $comment): Comment;

            function findById(int $id): ?Comment;

            function findAll(): array;
        }

    class CommentRepositoryImpl implements CommentRepository{

        private \PDO $connection;

        public function __construct($connection)
        {
            $this->connection = $connection;
        }

        function insert(Comment $comment): Comment
        {
            $sql = "INSERT INTO comments(email,comment) VALUES (?,?)";
            $statment = $this->connection->prepare($sql);
            $statment->execute([$comment->getEmail(),$comment->getComment()]);

            $id = $this->connection->lastInsertId();

            $comment->setId($id);

            return $comment;

        }

        function findById(int $id): ?Comment
        {
            $sql = "SELECT * FROM comments WHERE id = ?";
            $statment = $this->connection->prepare($sql);
            $statment->execute([$id]);

            if($row = $statment->fetch()){
                return new Comment(
                    $row['id'],$row['email'],$row['comment']
                );
            }else{
                return null;
            }
        }

        function findAll(): array
        {
            $sql = "SELECT * FROM comments";
            $statment = $this->connection->query($sql);

            $array = [];
            
            while($row = $statment->fetch()){
                $array[] =  new Comment($row['id'],$row['email'],$row['comment']);
            }
            
            return $array;
        }
    }
}
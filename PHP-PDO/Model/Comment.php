<?php
namespace Model {
    class Comment {

        private  ?int $id = null; 
        private  ?string $email = null;
        private  ?string $comment = null;

        public function __construct($id,$email,$comment)
        {
            $this->id = $id;
            $this->email = $email;
            $this->comment = $comment;
        }

        public function getId(): ?int
        {
            return $this->id;
        } 
        
        public function setId(?int $id): void
        {
            $this->id = $id;

        }

        public function getComment(): ?string
        {
            return $this->comment;
        } 
        
        public function setComment(?int $comment): void
        {
            $this->$comment = $comment;
        }
        
        public function getEmail(): ?string
        {
            return $this->email;
        } 
        
        public function setEmail(?int $email): void
        {
            $this->email = $email;
        }


    }
}
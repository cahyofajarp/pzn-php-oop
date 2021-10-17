<?php


require_once __DIR__ . "/../getConnection.php";
require_once __DIR__ . "/../Model/Comment.php";
require_once __DIR__ . "/../Repository/CommentRepository.php";

use Model\Comment;
use Repository\CommentRepositoryImpl;

$connection = getConnection();

$repository = new CommentRepositoryImpl($connection);

// $comment  =  new Comment(null,'repo@test.com','Hi');

// $newComment = $repository->insert($comment);

// var_dump($newComment->getId());

// FIND BY ID

$comment = $repository->findAll();

var_dump($comment);

$connection = NULL;



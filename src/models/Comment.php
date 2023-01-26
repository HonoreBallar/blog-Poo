<?php

namespace Models;

class Comment extends Model
{

    protected $table = "comments";

    public function findAllByArticle(int $id): array
    {
        $query = $this->pdo->prepare("SELECT * FROM comments WHERE article_id = :article_id");
        $query->execute(['article_id' => $id]);
        return $query->fetchAll();
    }

    public function add(array $args): void
    {
        extract($args);
        $query = $this->pdo->prepare('INSERT INTO comments SET author = :author, content = :content, article_id = :article_id, created_at = NOW()');
        $query->execute(compact('author', 'content', 'article_id'));
    }

}
<?php

namespace Entity;

use ORM\Entity\Entity;

class Post extends Entity {
    const TABLE = 'posts';  //Table name
    protected $id; //Id field (primary key)
    protected $title; //Title field
    protected $content; //Content field

    public function setId($id) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle() {
        return $this->title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent() {
        return $this->content;
    }

}
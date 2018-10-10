<?php
namespace Article\Model;

class Article
{
    public $id;
    public $category_id;
    public $title;
    public $body;
    public $keyword;

    public function exchangeArray(array $data)
    {
        $this->id     = !empty($data['id']) ? $data['id'] : null;
        $this->artist = !empty($data['creat_date']) ? $data['creat_date'] : null;
        $this->title  = !empty($data['title']) ? $data['title'] : null;
        $this->title  = !empty($data['body']) ? $data['body'] : null;
        $this->title  = !empty($data['keyword']) ? $data['keyword'] : null;
    }
}
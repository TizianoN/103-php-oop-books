<?php

class Book
{
  private $title;
  public $weight;
  public $author;

  public function __construct(
    string $title,
    float $weight,
    string $author
  ) {
    $this->setTitle($title);
    $this->weight = $weight;
    $this->author = $author;
  }

  public function setTitle($title)
  {
    if (empty($title))
      return false;
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function getDetails()
  {
    return "$this->title, $this->weight, $this->author";
  }
}
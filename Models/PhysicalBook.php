<?php

class PhysicalBook extends Book
{
  public static $weight_unit_measure = 'g';
  public $pages;

  public function __construct(
    string $title,
    float $weight,
    string $author,
    int $pages
  ) {
    parent::__construct($title, $weight, $author);
    $this->pages = $pages;
  }


  public function getDetails()
  {
    $unit_measure = self::$weight_unit_measure;
    return "
    <strong>Titolo:</strong> {$this->getTitle()}, <br>
    <strong>Peso:</strong> $this->weight $unit_measure, <br>
    <strong>Autore</strong> $this->author, <br>
    <strong>Numero pagine:</strong> $this->pages";
  }
}
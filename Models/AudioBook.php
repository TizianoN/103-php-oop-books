<?php

class AudioBook extends Book
{
  public static $weight_unit_measure = 'kb';
  public $duration;
  public $narrator;

  public function __construct(
    string $title,
    float $weight,
    string $author,
    int $duration,
    string $narrator
  ) {
    parent::__construct($title, $weight, $author);
    $this->duration = $duration;
    $this->narrator = $narrator;
  }

  public function getDetails()
  {
    $um = self::$weight_unit_measure;
    return "
    <strong>Titolo:</strong> {$this->getTitle()}, <br>
    <strong>Peso:</strong> $this->weight $um, <br>
    <strong>Autore</strong> $this->author, <br>
    <strong>Durata:</strong> $this->duration, <br>
    <strong>Narratore:</strong> $this->narrator";
  }
}
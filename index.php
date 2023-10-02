<?php

require __DIR__ . '/Models/Book.php';
require __DIR__ . '/Models/AudioBook.php';
require __DIR__ . '/Models/PhysicalBook.php';

$books = [
  new AudioBook('Audiolibro', 10, 'Autore', 300, 'Franco'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
  new AudioBook('Audiolibro', 10, 'Autore', 300, 'Franco'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
  new Book('Libro generico', 10, 'Autore'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
  new AudioBook('Audiolibro', 10, 'Autore', 300, 'Franco'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
  new AudioBook('Audiolibro', 10, 'Autore', 300, 'Franco'),
  new Book('Libro generico', 10, 'Autore'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
  new AudioBook('Audiolibro', 10, 'Autore', 300, 'Franco'),
  new PhysicalBook('Libro fisico', 10, 'Autore', 250),
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container mt-5">
    <h1>Book list</h1>
    <div class="row g-3">

      <?php foreach ($books as $book): ?>
      <div class="col-3">
        <div class="card h-100">
          <div class="card-body">
            <?= $book->getDetails() ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>

</body>

</html>
<?php
  // Call component.php to use component in it 
  require_once("../library/php/component.php");
  // Call DB Function
  require_once("../library/php/db.php");
  // Created DB
  CreateDB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <title>Welcome to My Library</title>
</head>
<body>
  <!-- Main Container -->
  <div class="m-container">
    <!-- Navbar -->
    <div class="d-flex justify-content-center bg-dark pt-2 pb-2">
      <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand fs-2" href="#"><i class="bi bi-bag-fill"></i> Book Store</a>
        </div>
      </nav>
    </div>
    <!-- Search Bar -->
    <div class="d-flex justify-content-center input-group mt-3 mb-3">
      <form class="row w-50" action="" method="post">
        <!-- Input: ID -->
        <div class="container-1 col-12">
          <!-- Use inputElement Component from component.php -->
          <?php inputElement("book_id", "book_id", "bi bi-file-person", "", "Book ID") ?>
        </div>
        <!-- Input: Name -->
        <div class="container-2 col-12">
          <?php inputElement("book_name", "book_name", "bi bi-book", "", "Book Name") ?>
        </div>
        <!-- Input: Publisher -->
        <div class="container-3 col-6">
          <?php inputElement("book_publish", "book_publish", "bi bi-send", "", "Book Publisher") ?>
        </div>
        <!-- Input: Price -->
        <div class="container-4 col-6">
          <?php inputElement("book_price", "book_price", "bi bi-currency-dollar", "", "Book Price") ?>
        </div>
        <!-- Buttons: Add, Update, Edit, Delete -->
        <div class="d-flex justify-content-center container-5 col-12">
          <?php buttonElement("add_btn","btn btn-dark mx-2 mt-3 col-2 bg-success", "bi bi-plus-lg") ?>
          <?php buttonElement("update_btn","btn btn-dark mx-2 mt-3 col-2 bg-dark", "bi bi-arrow-clockwise") ?>
          <?php buttonElement("edit_btn","btn btn-dark mx-2 mt-3 col-2 bg-primary", "bi bi-pen") ?>
          <?php buttonElement("delete_btn","btn btn-dark mx-2 mt-3 col-2 bg-danger", "bi bi-trash3") ?>
        </div>
      </form>
    </div>
    <div class="container">
      <!-- Data Table -->
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th>ID</th>
            <th>Book Name</th>
            <th>Publisher</th>
            <th>Book Price</th>
            <th>Edit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Code for dummies</td>
            <td>Telaga Biru Sdn Bhd</td>
            <td>50.99</td>
            <td><button type="button" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="py-4 d-flex justify-content-center bg-dark text-white fixed-bottom">&copy 2022 muizshukri</footer>
    <!-- Footer -->
  </div>
  <?php footerElement() ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
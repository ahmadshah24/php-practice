<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <title>Home</title>
</head>
<body>
<div class="container mt-4">
  <!-- Title Row -->
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">Delete Record</h1>
    </div>
  </div>

  <!-- Form for Deleting Record -->
  <div class="row mt-4">
    <div class="col-12">
      <form action="process_delete.php" method="post">
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" id="id" name="id" value="" >
        </div>
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
    </div>
  </div>
</div>





<script src="./bootstrap.min.js"></script>
</body>
</html>
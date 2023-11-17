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
      <h1 class="text-center">Add Record</h1>
    </div>
  </div>

  <!-- Form for Adding Record -->
  <div class="row mt-4">
    <div class="col-12">
      <form action="process_add.php" method="post">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-group">
          <label for="class">Class:</label>
          <select class="form-control" id="class" name="class" required>
            <!-- Add your class options here -->
            <?php
                $server = "localhost";
                $db = "crud";
                $user = "root";
                $pass = "";
                $con = mysqli_connect($server,$user, $pass, $db) or die("Couldn't connect");
                $query = "SELECT * FROM studentclass";
                $sql = mysqli_query($con,$query) or die("Couldn't execute query");

                while ($row = mysqli_fetch_assoc($sql)){

              ?>

            <option value="<?php echo $row['cid'] ?>"><?php echo $row['cname'] ?></option>
              <?php } ?>
          </select>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
<script src="./bootstrap.min.js"></script>
</body>
</html>
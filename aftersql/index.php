<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <link rel="stylesheet" href="../dist/output.css">
    <title>Home</title>
</head>
<body>
<div class="container mt-4">
  <!-- Title Row -->
  <div class="row">
    <div class="col-12">
      <h1 class="text-center bg-lime-500" >CRUD</h1>
    </div>
  </div>

  <!-- Menu Bar Row -->
  <div class="row">
    <div class="col-12">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./add.php">Add</a></li>
          <li class="nav-item"><a class="nav-link" href="./update.php">Update</a></li>
          <li class="nav-item"><a class="nav-link" href="./delete.php">Delete</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Title for Records -->
  <div class="row mt-4">
    <div class="col-12">
      <h2 class=""><strong>All Records</strong></h2>
      <?php
        $server = "localhost";
        $db = "crud";
        $user = "root";
        $pass = "";
        $con = mysqli_connect($server,$user, $pass, $db) or die("Couldn't connect");
        $query = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid ";
        $sql = mysqli_query($con,$query) or die("Couldn't execute query");
      ?>
    </div>
  </div>

  <!-- Table with Records -->
    <?php
        if(mysqli_num_rows($sql) > 0){
    ?>
  <div class="row mt-3">
    <div class="col-12">
      <table class="table">
        <thead class="thead-light">
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php 
            while ($row = mysqli_fetch_assoc($sql)) {
          ?>
          <tr>
            <td><?php echo $row['sid'] ?></td>
            <td><?php echo $row['sname']   ?></td>
            <td><?php echo $row['saddress']  ?></td>
            <td><?php echo $row['cname']  ?></td>
            <td><?php echo $row['sphone']  ?></td>
            <td>
              <button class="btn btn-primary" ><a href="edit.php?stdid=<?php echo $row['sid'] ?>">Edit</a></button>
              <button class="btn btn-danger">Delete</button>
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
  <?php } else{
        echo "<h2>No record found</h2>";
            }
        mysqli_close($con);
    ?>
</div>
<script src="./bootstrap.min.js"></script>
</body>
</html>
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
      <h1 class="text-center">Edit Record</h1>
    </div>
  </div>

    <?php
        $server = "localhost";
        $db = "crud";
        $user = "root";
        $pass = "";
        $con = mysqli_connect($server,$user, $pass, $db) or die("Couldn't connect");
        $student_id = $_GET['stdid'];
        $query = "SELECT * FROM student WHERE sid  = $student_id ";
        $sql = mysqli_query($con,$query) or die("Couldn't execute query");
      ?>
  <!-- Form for Editing Record -->
  <div class="row mt-4">
    <div class="col-12">
        <?php
            if(mysqli_num_rows($sql) > 0){
               
            while ($row = mysqli_fetch_assoc($sql)) {
          
        ?>
      <form action="update_date.php" method="post">
        <div class="form-group">
          <label for="id">ID:</label>
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['sid'] ?>" readonly>
        </div>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" value="<?php echo $row['sname'] ?>" required>
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <input type="text" class="form-control" id="address" name="address" value="<?php echo $row['saddress'] ?>" required>
        </div>
        <div class="form-group">
          <label for="class">Class:</label>
          <select class="form-control" id="class" name="class" required>
          <?php  
            $query1 = "SELECT * FROM studentclass";
            $sql1 = mysqli_query($con,$query1) or die("Couldn't execute query");
            if(mysqli_num_rows($sql1) > 0){
               
                while ($row1 = mysqli_fetch_assoc($sql1)) {
                    if($row['sclass'] == $row1['cid']){
          ?>
            <option selected value="<?php echo $row1['cid'] ?>" ><?php echo $row1['cname'] ?></option>
            <?php  }}} ?>
          </select>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" value="<?php echo $row['sphone'] ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      <?php }} ?>
    </div>
  </div>
</div>





<script src="./bootstrap.min.js"></script>
</body>
</html>
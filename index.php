<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container my-5">
  
  <form  method="POST" action="list.php" enctype="multipart/form-data">
  <div class="form-group">
      <label for="firstname">Name:</label>
      <input type="name" class="form-control" id="Name" placeholder="Enter FirstName" name="FirstName">
    </div>

   <div class="mb-3">
   <label for="image" class="form-label">Uploade image</label>
   <input type="file" name="image" id="image" class="form-control" required>
   </div>

   <button class="btn btn-primary" name="submit">Submit</button>


    </div>

    <?php
    if(isset($_POST['submit']))
    {

        header('LOCATION:list.php');
    }
    ?>

</body>
</html>
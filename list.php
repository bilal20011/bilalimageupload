<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container my-5">
<div class="table-reponsive">
<table class="table table-borderd table-hover table-dark ">
<THEAD>
<th>ID</th>
<th>NAME</th>
<th>IMAGE</th>
</THEAD>
<tbody>

<?php
require_once 'config.php';
if(isset($_POST['submit']))
{
$name = $_POST['FirstName'];
$image = $_FILES['image'];
$filetmp = $image['tmp_name'];

print_r($image);

$filename=$image['name'];
$fileext= explode('.' , $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('jpg','jpeg','png');
if(in_array($filecheck,$fileextstored))
{
    $destinationfile = 'image/'.$filename;
    move_uploaded_file($filetmp,$destinationfile);
    $query = $con ->query("INSERT INTO `upload` ( `name`, `image`) VALUES ( '$name', '$destinationfile ')");
    if($query)
    {
        echo "uploade successfuly";
    
    }
    else{
        echo "error";
    }

    $slectquery = $con ->query("SELECT * FROM upload");
    while($data = $slectquery -> fetch_assoc())
{
    ?>
    <tr>
    <td> <?php echo $data['id']?></td>
    <td><?php echo $data['name']?></td>
    <td><img width = "100px" hight="100px"src="<?php echo $data['image']?>"></td>
    </tr>
    <?php
}

}
}
?>

</tbody>
</table>
</div>
</div>
</body>
</html>
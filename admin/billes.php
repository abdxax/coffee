<?php
require '../DB/admin.php';
$login=new Admin();
$allbill=$login->billes();
if(isset($_POST['sub'])){
    $user=strip_tags($_POST['user']);
    // $pass=strip_tags($_POST['pass']);

    $login->addGroup($user);
}
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        body{
            background-color: #f4ece2;
        }
        a{
            margin: 15px;
        }
        input{
            margin: 20px;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6">

        </div>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($allbill as $row){
                echo '
                <tr>
                <td>'.$row['id'].'</td>
                 <td>'.$row['name'].'</td>
                  <td>'.$row['phone'].'</td>
                   <td><a href="show.php?id='.$row['id'].'">Show</a> </td>
</tr>
                ';
            }
            ?>

            </tbody>
        </table>
    </div>
</div>
</body>
</html>
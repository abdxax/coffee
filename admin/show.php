<?php
require '../DB/admin.php';
$login=new Admin();
$allbill=$login->getProcBill($_GET['id']);

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
        <div class="col-md-12">
            <div class="text-center">
                <table class="table">
                    <thead></thead>
                    <tbody>
                    <?php
                    $total=0;
                    foreach ($allbill as $row){
                     $total+=$row['price'];
                     echo '<tr>
<td></td>
                     <td>'.$row['name_prod'].'</td>
                     <td>'.$row['price'].'</td>

</tr>

';
                    }
                    ?>
                    </tbody>
                </table>

                <p>Total :<?php echo $total;?></p>

            </div>
        </div>
    </div>
</div>
</body>
</html>
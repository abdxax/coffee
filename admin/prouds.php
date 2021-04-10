<?php
require '../DB/admin.php';
$login=new Admin();
$alltype=$login->getGroup();
$pros=$login->getProc();
if(isset($_POST['sub'])){
    $name=strip_tags($_POST['name']);
    $price=strip_tags($_POST['price']);
    $typ=strip_tags($_POST['typ']);
    // $pass=strip_tags($_POST['pass']);

    $login->addProc($name,$price,$typ);
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
        <div class="col-md-6 offset-md-5">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                    <select name="typ">
                        <?php
                        foreach ($alltype as $row){
                            echo '
                            <option value="'.$row['id'].'">'.$row['group_name'].'</option>
                ';
                        }
                        ?>
                    </select>
                </div>



                <div class="form-group">
                    <input type="submit" name="sub" class="btn btn-info" value="Add ">
                </div>


            </form>
        </div>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($pros as $row){
                echo '
                <tr>
                <td>'.$row['name_prod'].'</td>
                 <td>'.$row['price'].'</td>
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
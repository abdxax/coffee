<?php
require '../DB/admin.php';
$login=new Admin();
$alltype=$login->getGroup();
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
        <div class="col-md-6 offset-md-5">
            <form method="post">
                <div class="form-group col-md-4">
                    <input type="text" name="user" class="form-control" placeholder="Group">
                </div>



                <div class="form-group">
                    <input type="submit" name="sub" class="btn btn-info" value="Add ">
                </div>


            </form>
        </div>

       <div class="col-md-6 text-center">
           <table class="table">
               <thead>
               <th>Group</th>
               </thead>
               <tbody>
               <?php
               foreach ($alltype as $row){
                   echo '
                <tr>
                <td>'.$row['group_name'].'</td>
</tr>
                ';
               }
               ?>

               </tbody>
           </table>
       </div>
    </div>
</div>
</body>
</html>
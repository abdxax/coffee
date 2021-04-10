<?php
require 'DB/login.php';
if(isset($_POST['sub'])){
    $user=strip_tags($_POST['user']);
    $pass=strip_tags($_POST['pass']);
    $login=new Login();
    $login->login($user,$pass);
}
?>

<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    form{
        margin: 10px;
    }
    .form-group{
        margin-top: 10px;
    }
    body{
        background-color: #f4ece2;
    }
</style>
</head>
<body>
<div class="container">
    <div class="row  ">
        <div class="col-md-12 text-center">
            <img src="logo.jpeg">
        </div>
        <div class="col-md-6 offset-md-5">
            <form method="post">
                <div class="form-group">
                    <input type="text" name="user">
                </div>

                <div class="form-group">
                    <input type="text" name="pass">
                </div>

                <div class="form-group ">
                    <input type="submit" name="sub" class="btn btn-info " value="Login ">
                </div>


            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>
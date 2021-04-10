<?php
require 'DB/vist.php';
$vis=new Vist();
$typ=$vis->getGroup();
$pros='';
if(isset($_GET['dis'])){
    $id_grp=$_GET['cat'];
    $pros=$vis->getProc($id_grp);
}

if (isset($_POST['sub'])){
$dri=$_POST['drinks'];
$name=$_POST['name'];
$phone=$_POST['phone'];

$vis->addNewBill($name,$phone,$dri);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<title>Half Million coffee-CoffeeOrder</title>
<script src="jquery.js"></script>

<style>
@charset "utf-8";
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
	background-color: #FFC;


}
#footer {
	font-size: 9px;
	text-align: center;
}
td {
	border: 1px solid #000;
}
table {
	background-color: #FFF;
	width: 800px;
	margin: 10px auto 10px auto;
}

button {
  margin:0 45% 0;

}
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="10">
  <tr>
    <td><img src="img/logo.png" alt="">
      <br>
        <br>
     
      </td>
  </tr>
  <tr>
    
  <td>     
    <a href="index.html">Home Page</a>  ||  <a href="about.html">About Us</a>
 </td>
  </tr>
  <tr>
    
    <td>
        
          
<h2>Menu</h2>

<label for=""> Select Catagory : </label>
        <form>
<select name="cat"  onchange="show(this.value)">
    <option value="-">---</option>
    <?php
    foreach ($typ as $row){
        echo '
                            <option value="'.$row['id'].'">'.$row['group_name'].'</option>
                ';
    }
    ?>

</select>

            <input type="submit" value="Show" name="dis">
        </form>

<div id="">
    <?php
    if($pros!=''){
    ?>
<h3> </h3>
    <table>
      <thead>
      <tr>
          <td>
              Name
          </td>
          <td>
              Price
          </td>
      </tr>
      </thead>
        <tbody>
        <form method="post">
        <?php
        foreach ($pros as $p){
            echo '
            
            <tr>
         <td>   <input type="checkbox" value="'.$p['id'].'" id="chocolate" name="drinks[]">  '.$p['name_prod'].'</td>
         <td>'.$p['price'].'RS</td>
        </tr>
        
            
            ';
        }

        ?>
        </tbody>
     
    </table>
    <?php
    }
    ?>
</div>




    <button style="font-size:18px;"  data-bs-toggle="modal" data-bs-target="#exampleModal"> PROCCESS ORDER </button>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                            <div class="form-group">
                                <input type="text" name="name" placeholder="Name" class="form-control">
                            </div>

                            <div class="form-group">
                                <input type="text" name="phone" placeholder="Phone" class="form-control">
                            </div>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" name="sub" class="btn btn-primary" value="Save changes"/>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        </td>
  </tr>
  <tr>
    
  <td>     
   <a href="">Twitter</a>  ||<a href="">FaceBook</a>|| <a href="About.php">Instagram </a>   </td>
  </tr>
  <tr>
    <td id="footer">2020</td>
  </tr>
</table>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>


<script>
//hide all cats
document.getElementById('colddrinks').style.display ='none';
      document.getElementById('hotdrinks').style.display ='none';
      document.getElementById('orderbtn').style.display ='none';

    function show(value){
      if(value=="colddrinks"){
      document.getElementById('colddrinks').style.display ='block';
      document.getElementById('orderbtn').style.display ='block';
      document.getElementById('hotdrinks').style.display ='none';
      }
      else if(value=="hotdrinks") {
        document.getElementById('colddrinks').style.display ='none';
      document.getElementById('hotdrinks').style.display ='block';
      document.getElementById('orderbtn').style.display ='block';
    
      }

      else if(value=="-") {
        document.getElementById('colddrinks').style.display ='none';
      document.getElementById('hotdrinks').style.display ='none';
      document.getElementById('orderbtn').style.display ='none';
    
      }
    
    }
    


    function  getBuyInfo(){


$(document).ready(function() {

$("#orderbtn").click(function(){

var items = [];

$.each($("input[name='drinks']:checked"), function(){

items.push($(this).val());

});


alert(" Your Selected Drinks: " + items.join(", ") );







});

});

    }
    
    </script>
</body>
<!-- InstanceEnd --></html>
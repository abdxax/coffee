<?php
require 'DB/vist.php';
$vis=new Vist();
$typ=$vis->getGroup();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

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

                <input type="submit" value="m">
            </form>

            <div id="colddrinks">
                <h3>COLD DRINKS </h3>
                <table>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Price
                        </td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Cold-chocolate" id="chocolate" name="drinks">  Cold chocolate</td>
                        <td>19.00RS</td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Latte" id="Latte" name="drinks">  Latte </td>
                        <td>12.00RS</td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Americano" id="Americano" name="drinks">  Americano </td>
                        <td>19.00RS</td>
                    </tr>

                </table>
            </div>


            <div id="hotdrinks">
                <h3>HOT DRINKS </h3>
                <table>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Price
                        </td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Hot-chocolate" id="chocolate" name="drinks">  Hot chocolate</td>
                        <td>10.00RS</td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Cappuccino" id="Cappuccino" name="drinks"> Cappuccino  </td>
                        <td>12.00RS</td>
                    </tr>
                    <tr>
                        <td>   <input type="checkbox" value="Espresso" id="Espresso" name="drinks">  Espresso  </td>
                        <td>8.00RS</td>
                    </tr>

                </table>
            </div>


            <button style="font-size:18px;" id="orderbtn" onclick="getBuyInfo()"> PROCCESS ORDER </button>

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
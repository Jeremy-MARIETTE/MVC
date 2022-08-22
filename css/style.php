<?php
header("Content-type: text/css; charset: UTF-8");
include('../models/css.php');



?>

<?php


global $color;
global $headerColor;
global $footerColor;
global $h1Color;
global $h2Color;
global $h1Police;
global $h2Police;


//$color = "red";
$bgColor = $color;
$font = "porter";

?>
<style>
@font-face {
 font-family: "porter";
 src: url("../fonts/porter.woff") format("woff");
}




#gestion{
  color: <?php echo $h1Color; ?> ;
}

body{
    background-color: <?php echo $bgColor; ?> ;
}
h1{
    font-family: <?php echo $font; ?>;
    color : <?php echo $h1Color; ?>;
}
#include{
    background-color: red;
}
.footer{
    background-color: <?php echo $footerColor; ?>;
    margin-top:10%;
}
#mapid{ 
    height: 280px; 
}
#formulaire{
    margin-top:12%;
    margin-left:25%;
}
#pastEvents{
    margin-top: 70px !important;
}
#text {

    margin-top: 10px !important;
}
#services{
    margin-top: 50px;
}
#contact{
    margin-top: 50px;
}


nav ul li a{
   margin-left: 40px;
}
 nav ul li a:hover{
    color: black !important;
   transform: scale(1.5);
   margin-left: 40px;

}
#services img:hover{
    transform: rotate(30deg);
}
i{
    position: relative;
    z-index: 1;
}
.circle {
  position: absolute;
  z-index: 2;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  padding: 10px;
  background: red;
  border: 3px solid #000;
  color: #000;
  text-align: center;
  font: 20px Arial, sans-serif;
  margin-top: -40px;
  margin-left: 70px;
}



#sidebarMenu nav li {
    margin-top: 10px!important;
}
</style>

<!-- css file  -->
<style>
    <?php include 'style.css'; ?>
    </style>

<html?>
<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Get Kitten type data sent by GET

// if kitten name Get
if(isset($_GET["kitten"])) { $kitten = $_GET["kitten"]; } else { $kitten = ""; }


print "
// created a container

<body>
<div class='container'>

<b><h2>kitten:</h2></b>  
";

// Print kitten if checked
if($kitten === 'amer') { print
    "<body>
    <img src='assets/american.jpg' class='kitten-img'>
    <h3> meet American Oliver. Pay yo bills pwease. </h3>
    </body>"; }
if($kitten === 'pers') { print 
    "<body>
    <img src='assets/persian.jpg' class='kitten-img'>
    <h3> meet Chanteclaire Persian. Madam, I have seen better days! </h3>
    </body>"; }
if($kitten === 'russ') { print 
    "<body>
    <img src='assets/russian.jpg' class='kitten-img'>
    <h3> meet Rosko the Russian Blue. Dah. </h3>
    </body>"; }
if($kitten === 'ragd') { print 
    "<body>
    <img src='assets/rag.jpg' class='kitten-img'>
    <h3> meet Bella the Ragdoll. free hugs </h3>
    </body>"; }
if($kitten === 'orie') { print 
    "<body>
    <img src='assets/oriental.jpg' class='kitten-img'>
    <h3> meet Oreo the oriental. Looks like dobby! </h3>
    </body>"; }

print "
</p>
<form>
 <input type='button' value='Go back!' class='btn-grn' onclick='history.back()'>
</form>
</div>
</body>
";
// history function used for button to go homepage, returns by latest history

?>
</html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Question A</title>
<link rel="stylesheet" href="styles.css">
<style>
body{
    background-color: indianred;
}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 2px 1px;
  cursor: pointer;
}
</style>
</head>
<body>
<?php 
echo " <br><br><br><br><br><br><br><br>";
?>
<section class="bro">
<div class="border">
    
<?php echo " <br><br><br><br><br>";?>
<form method="post" action="info.php">
<h3>Username:</h3>
 <textarea name="textarea" id="textarea"></textarea>

 <?php echo "<br><br>";?>


<input type="submit" class="button" value="Submit">
<?php echo "<br><br>";?>

<?php
// include 'index.php';

$input = $_POST["textarea"];

echo "<br />";

if($input == "abc"){
    echo "Verfied";
    }else{
    echo "Error";
    }
?>
<!-- <h2>Key in username and click submit</h2> -->

</form>

</div>
</section>
</body>
</html>

<?php
// include 'index.php';

// $input = $_POST["textarea"];

// echo $input;
// echo "<br />";

// if($input == "abc"){
//     echo "Verfied";
//     }else{
//     echo "Error";
//     }
// ?>

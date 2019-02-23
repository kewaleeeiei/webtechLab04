<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

	<link rel="stylesheet" href="bulma-0.7.2/css/bulma.min.css">
	<title>Calculate calories</title>



    <link rel="stylesheet" type="text/css" href="style_lab4.css">
 

</head>
<body>
<body class="Tbody">
    <div class="tile is-parent">
      <article class="ttile is-child notification is-warning" style="    width: 600px;
    left: 10%;">
        <p class="title">Check Calories</p>
        <p class="subtitle" id = "texttest">Calculate calories your received per day.</p>
        <div class="content">


<!--------------------------------------------------upload image ------------------------------------------------------>
 <div class="pic">
 <?php 
$file_tmp=$_FILES['file_pic']['tmp_name'];
$file_name=$_FILES['file_pic']['name'];

if(move_uploaded_file($file_tmp,"uploads/$file_name")){

                                         
 
$allowed_types=array('jpg','jpeg','gif','png');
$dir ="uploads/$file_name";


echo "<img style='width:500px;align:center;' src='".$dir."'/>&nbsp;";

}
else {
$allowed_types=array('jpg','jpeg','gif','png');
$dir ="uploads/gratisography-254H.jpg";
echo "<img style='width:500px;' src='".$dir."'/>&nbsp;";
echo "https://gratisography.com/photo/college-girl/";

}
?>

</div>



<!--------------------------------------------- upload csv file------------------------------------------------------->
<div class="output">

<?php
$file_tmp=$_FILES['file_csv']['tmp_name'];
$file_name=$_FILES['file_csv']['name'];


$x =0;
$y = 0;
$female =0;
$male = 0;

if(move_uploaded_file($file_tmp,"uploads/$file_name")){
$file = fopen("uploads/$file_name","r");

while (!feof($file)) {
	$content = fgetcsv($file);
	$count = count($content);
	for($i=1;$i<$count;$i++){
		$x = $y + $content[$i];
			$y = $x;
	
			
	}



}



if($_POST['gender'] == "female"){




	$female = 66+(13.7*$_POST['input_weight'])+(5*$_POST['input_hight'])-(6.8*$_POST['input_age']);
		echo "Calories ".$_POST['input_name']. " received per day is ".$female."<br>";


	if($y > $female){
		echo $_POST['input_name']." get energy ".($y - $female)." kcal too much";
	}
	elseif($y < $female){
		echo $_POST['input_name']." get energy ".($female - $y). " kcal less";
	}
	elseif($y == $female){
		echo $_POST['input_name']." get enought calories.";
	}

}
else if($_POST['gender'] == "male"){

	$male = 665+(9.6*$_POST['input_weight'])+(1.8*$_POST['input_hight'])-(4.7*$_POST['input_age']);
	echo "Calories ".$_POST['input_name']. " received per day is ".$male."<br>";
	

		if($y > $male){
		echo $_POST['input_name']." get energy ".($y - $male)." kcal too much";
	}
	elseif($y < $male){
		echo $_POST['input_name']." get energy ".($male - $y). " kcal less";
	}
	elseif($y == $male){
		echo $_POST['input_name']."  get enought calories.";
	}
}



}

else {
	echo "Do not file upload";
}

 ?>
</div>
<!-----------------------------------------------------gender---------------------------------------------------------->


<?php 
/*
echo  $_POST['input_name']."<br/>";


if($_POST['gender'] == "female"){
	$female = 66+(13.7*$_POST['input_weight'])+(5*$_POST['input_hight'])-(6.8*$_POST['input_age']);
	echo "Your BMR per day = ".$female;
}
elseif($_POST['gender'] == "male"){
	$male = 665+(9.6*$_POST['input_weight'])+(1.8*$_POST['input_hight'])-(4.7*$_POST['input_age']);
	echo "Your BMR per day = ".$male;
}

*/
?>
<!--------------------------------------------------------------------------------------------------------->

<div>
	<?php 
/*
echo "<b>".$_POST['gender']."</b>";*/
?>
</div>



     </div>
      </article>
    </div>
  </div>



</body>
</html>
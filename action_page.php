<!DOCTYPE html>
<html>
<head>
	<title>VoteBot</title>
</head>
<body>
<center>
<img src="vbotnograd.png">
<style>
  	h1{
  	color: white;
	font-family: Century Gothic, sans-serif;
  	}
  	p{
  	color: white;
	font-family: Century Gothic, sans-serif;
  	}
  	body {
        background: url("votebot grad.jpg") no-repeat;
        background-size:cover;
        
	} 
	img{
	background: no-repeat;
	}

</style>
<?php

$senator_info = array
  ( "Al_Franken" => array(
            'Party' => "Dem",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Lib"
        ),
        "Angus_King" => array(
            'Party' => "Other",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Lib"
        ),
         "Amy_Klobuchar" => array(
            'Party' => "Dem",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Lib"
        ),
         "Ben_Cardin" => array(
            'Party' => "Dem",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Lib"
        ),
         "Ben_Sasse" => array(
            'Party' => "Rep",
            'Fiscally' => "Fisc_Con",
            'Socially' => "Soc_Mod"
        ),
          "Cory_Booker" => array(
            'Party' => "Dem",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Lib"
        ),
        "Charles_Schumer" => array(
            'Party' => "Dem",
            'Fiscally' => "Fisc_Lib",
            'Socially' => "Soc_Mod"
        ),
        "Thom_Tillis" => array(
            'Party' => "Rep",
            'Fiscally' => "Fisc_Con",
            'Socially' => "Soc_Con"
        )
    );
    
//var_dump($senator_info);
if(empty($_POST)){
	header('Location: index.php');
	exit;
}
else{
	//var_dump($_POST);

	//echo "<h1>".$_POST["senator"] . "</h1>";
	//var_dump($senator_info[$_POST["senator"]]);
	$i = 0;
	if($_POST["Party"] == $senator_info[$_POST["senator"]]['Party']){
		$i++;
	}
	if($_POST["Fiscally"] == $senator_info[$_POST["senator"]]["Fiscally"]){
		$i++;
	}
	if($_POST["Socially"] == $senator_info[$_POST["senator"]]["Socially"]){
		$i++;
	}
	$percent = round(100*($i/3.0));
	//var_dump($percent);
	$senatorname = str_ireplace("_", " ", $_POST["senator"]);
	echo "<h1>". "There is a " . $percent . "% chance that " . $senatorname . " will vote YES on this bill" ."</h1>";
	if($percent == 67){
		echo '<img src="70.png" width="700" height="34">';
		exit;
	}
	if($percent == 33){
		echo '<img src="30.png" width="700" height="34">';
		exit;
	}
	if($percent == 100){
		echo '<img src="100.png" width="700" height="34">';
		exit;
	}
	if($percent == 0){
		echo '<img src="0.png" width="700" height="34">';
		exit;
	}
	exit;
	
		
}	









?>
</center>
</body>
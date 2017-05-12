
<!DOCTYPE html>
<html>
<head>
	<title>VoteBot</title>
</head>
<body>
		<center>
		<img src="vbotnograd.png">
	<form action="/action_page.php" method="POST">
		<h2>Select a Senator</h2>
		<select name = "senator">
			<option  value = "Al_Franken" name = "Al_Franken">Al Franken</option>
			<option  value="Amy_Klobuchar">Amy Klobuchar</option>
			<option  value="Angus_King">Angus King</option>
			<option  value="Ben_Cardin">Ben Cardin</option>
			<option  value="Ben_Sasse">Ben Sasse</option>
			<option  value="Cory_Booker">Cory Booker</option>
			<option  value="Charles_Schumer">Charles Schumer</option>
			<option  value="Thom_Tillis">Thom Tillis</option>
		</select>
		<h2>Tell us about the bill</h2>
		<p>(This information is about the bill NOT the senator)</p>
		<h3>Party</h3>
  		<select name = "Party">
  			<option value="Rep">Republican</option>
  			<option value="Dem">Democratic</option>
  			<option value="Other">Other</option>
		</select> 
		<h3>Fiscally</h3>
  		<select  name = "Fiscally">
  			<option value="Fisc_Lib">Liberal</option>
  			<option value="Fisc_Mod">Moderate</option>
  			<option value="Fisc_Con">Conservative</option>  		
		</select> 
		<h3>Socially</h3>
  		<select name = "Socially">
  			<option value="Soc_Lib">Liberal</option>
  			<option value="Soc_Mod">Moderate</option>
  			<option value="Soc_Con">Conservative</option>
		</select> 
		
	<p><br /></p>	
  	<input type="submit" value="Submit" class = "submit">
  	</form>
<style>
  	h1{
  	color: white;
	font-family: Century Gothic, sans-serif;
  	}
  	p{
  	color: white;
	font-family: Century Gothic, sans-serif;
	
  	}
  	h2{
  	color: white;
	font-family: Century Gothic, sans-serif;
  	}
  	h3{
  	color: white;
	font-family: Century Gothic, sans-serif;
  	}
  	select{
  	background-color: #7a879b;
	font-family: Century Gothic, sans-serif;
	color: #000000;
	display: inline-block;
	height: 50px;
	width: 180px;
	font-size: 25px;
  	}
  	img{
  	padding-bottom: -10px;
  	}
  	.submit{
  	background-color: #7a879b;
	font-family: Century Gothic, sans-serif;
	display: inline-block;
	height: 50px;
	width: 180px;
	}
	body {
        background: url("votebot grad.jpg") no-repeat;
        background-size:cover;
        
	} 
  	
</style>
</center>
</body>	

</html>
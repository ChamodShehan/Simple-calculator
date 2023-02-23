<!DOCTYPE html>
<html>
<head>
	<title>Calculator Project</title>

<style type="text/css">
	
	h1{
		background-color: black;
		color: red;
		text-align: center;
	}
</style>

<link rel="stylesheet" type="text/css" href="assest/css/calculatorstyle.css">

<script type="text/javascript">
	function setScreen(num){
	document.getElementById('txtScreen').value+=num;

	console.log(num);
}
</script>
</head>
<body style="background-color: black;">
	<h1 style=""><center>Simple calculator</center></h1>
	

	<div class="box">
		<div class="display">
			<input type="text" readonly="" size="18" name="" id="txtScreen" value="0">
		</div>

		<div class="keys">
			<input type="button" name="" value="7" class="button blank" onclick="setScreen('7')">
			<input type="button" name="" value="8" class="button" onclick="setScreen('8')">
			<input type="button" name="" value="9" class="button" onclick="setScreen('9')"> 
			<input type="button" name="" value="+" class="button"><br>
			<input type="button" name="" value="4" class="button" onclick="setScreen('4')">
			<input type="button" name="" value="5" class="button" onclick="setScreen('5')">
			<input type="button" name="" value="6" class="button" onclick="setScreen('6')">
			<input type="button" name="" value="-" class="button"><br>
			<input type="button" name="" value="1" class="button" onclick="setScreen('1')">
			<input type="button" name="" value="2" class="button" onclick="setScreen('2')">
			<input type="button" name="" value="3 " class="button" onclick="setScreen('3')">
			<input type="button" name="" value="*" class="button"><br>
			<input type="button" name="" value="C" class="button pink">
			<input type="button" name="" value="0" class="button" onclick="setScreen('0')">
			<input type="button" name="" value="=" class="button pink">
			<input type="button" name="" value="/" class="button">
			
		</div>
	</div>

	

</body>
</html>
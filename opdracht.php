<?php 
date_default_timezone_set("Europe/Amsterdam");
$datename = ['Nacht', 'Morgen', 'Middag', 'Avond'];
$dateclass = ['Nacht', 'Morgen', 'Middag', 'Avond'];
$tijd = date("H:i:s");

if ($tijd < 6) {
	$datename = 0;
}

else if ($tijd < 12) {
	$datename = 1;
}

else if ($tijd < 18) {
	$datename = 2;
}

else if ($tijd < 23) {
	$datename = 3;
}
?>


<!DOCTYPE html>
<html lang="nl">

<body class="<?php echo $dateclass[$datename]; ?>">
	<h1> Goede <?php echo $dateclass[$datename]; ?> </h1>
	<h1> Het is nu <?php echo $tijd; ?></h1>


</body>
</html>


<style type="text/css">
	.Nacht{
		background-image: url(img/night.png);
		background-size: 100%;
		text-align: center;
		margin-top: 200px;
	}

	.Morgen{
		background-image: url(img/morning.png);
		background-size: 100%;
		text-align: center;
		margin-top: 200px;
	}

	.Middag{
		background-image: url(img/afternoon.png);
		background-size: 100%;
		text-align: center;
		margin-top: 200px;
	}

	.Avond{
		background-image: url(img/evening.png);
		background-size: 100%;
		text-align: center;
		margin-top: 200px;
	}
	
</style>
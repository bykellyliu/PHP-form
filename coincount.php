<?php include('include/header.php'); ?>

<?php
$pennies = $_POST['pennies'];
$nickels = $_POST ['nickels'];
$dimes = $_POST ['dimes'];
$quarters = $_POST ['quarters'];

$loonie = $_POST ['dollar'];
$toonie = $_POST ['twodollar'];

$totalPennies = $pennies*1;
$totalNickels = $nickels*5 ;
$totalDimes = $dimes*10;
$totalQuarters = $quarters*25;
$totalLoonies = $loonie*100;
$totalToonies = $toonie*200;

$totalCents = $totalPennies + $totalNickels + $totalDimes + $totalQuarters + $totalLoonies + $totalToonies;
$totalDollar = $totalCents/100;
?>

<table cellspacing = "20px">
	<tr><h3>The following coins are counted and valued: </tr></h3>
	<tr>
		<td>Pennies: </td>
		<td><?php echo $pennies;?> </td>
		<td></td>
		<td>Nickels: </td>
		<td><?php echo $nickels; ?> </td>
	</tr>
	

	<tr>
		<td>Dimes: </td>
		<td><?php echo $dimes; ?> </td>
		<td></td>
		<td>Quarters: </td>
		<td><?php echo $quarters;?> </td>
	</tr>

	<tr>
		<td>1 Dollar Coin: </td>
		<td><?php echo $loonie; ?> </td>
		<td></td>
		<td>2 Dollar Coin: </td>
		<td><?php echo $toonie; ?> </td>
		
	</tr>

	<tr><td><h3>You therefore have: </tr></td></h3>
	<tr>	
		<td>Total in Cents:</td>
		<td><?php echo "&cent"; echo $totalCents; ?> </td>
	</tr>
	
	<tr>	
		<td>Total Dollars: </td>
		<td><?php echo "$"; echo $totalDollar; ?> </td>
	</tr>
</table>'


<a href= "index.php">
Return to coin entry page
</a>

<?php include('include/footer.php'); ?>
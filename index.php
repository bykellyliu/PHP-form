<?php include("include/header.php"); ?>
<div class="content">
<h3>Please enter your coin count and denominations:</h3>
<form action="coincount.php" method="post">
<table>
  <tr>
    <td>Pennies (1 &cent;):</td>
    <td><input type="text" name="pennies" size="6" /></td>
    <td>Nickels (5 &cent;):</td>
    <td><input type="text" name="nickels" size="6" /></td>
  </tr>
  <tr>
    <td>Dimes (10 &cent;):</td>
    <td><input type="text" name="dimes" size="6" /></td>
    <td>Quarters (25 &cent;):</td>
    <td><input type="text" name="quarters" size="6"/></td>
  </tr>
  <tr>
    <td>1 Dollar Coins:</td>
    <td><input type="text" name="dollar" size="6" /></td>
    <td>2 Dollar Coins:</td>
    <td><input type="text" name="twodollar" size="6" /></td>
  </tr>
  <tr>
    <td colspan="2">
      <input type="submit" name="submit" value="Calculate Coins" />
    </td>
    <td colspan="2">
      <input type="reset" name="reset" value="Clear form" />
    </td>
  </tr>
</table>
</form>
<?php include("include/footer.php"); ?>
</div>
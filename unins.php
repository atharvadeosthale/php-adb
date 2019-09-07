<?php
if(isset($_POST["submit"]))
{
	$package = $_POST["package"];
	shell_exec("adb uninstall ".$package);
}
?>
<form method="post" action="unins.php">
	Package: <input type="text" name="package">
	<input type="submit" name="submit">
</form>
<?php
	session_start();
	if(isset($_SESSION['flag'])){
?>
<html>
<head>
	<title>VIEW PROFILE</title>
</head>
<body>

	<?php include('Header.php');?>
			<td>
				<form>
					<fieldset>
						<legend><b>PROFILE PICTURE</b></legend>
						<img src="picture2.png" width="100px" height="100px" ><br>
                         <a href="ProfilePicture.php">
                         <input type="file" name="picture"  > <hr>
						<input type="submit" name="submit" value="Submit">
					</fieldset>
				</form>
			</td>
		</tr>
				
		<tr height="50px">
			<td colspan="3" align="center">
				Copyright@2017
			</td>
		</tr>
	</table>
</body>
</html>
<?php

	}else{
		header('location: Login.php?msg=login_first');
	}

?>
<table width="900px" border="1" align="center">
		<tr colspan="3">
			<td width="100px">
				<img src="picture1.jpg" width="100px" height="100px" ></td>
				<td align="right">
				<b>Logged in as <a href="LoginDash.php"><?php echo $_SESSION['uname']?></a>|
	             <a href="Logout.php">Logout</a></b>
			</td>
		</tr>
		<tr width="200px">
			<td width="200px">
				<b>Account</b>
				<hr>
				<ul>
				<li><a href="LoginDash.php">Dashboard</a></li>
				<li><a href="ViewProfile.php">View Profile</a></li>
				<li><a href="EditProfile.php">Edit Profile</a></li>
				<li><a href="ProfilePicture.php">Change Profile Picture</a></li>
				<li><a href="ChangePassword.php">Change Password</a></li>
				<li><a href="Logout.php">Logout</a></li>
				</ul>
			</td>
<body>
	<h1 align="center">Registration Form</h1>
	<div id="container" align="center">
		<form action="registerIntoDataBase" method="post">
			<label for="firstname">Firstname : </label><input type="text" name="firstname" required><br><br>
			<label for="lastname">Lastname : </label><input type="text" name="lastname" required><br><br>
			<label for="email">Email : </label><input type="text" name="email" required><br><br>
			<label for="dob">DOB : </label> <input type="date" name="dob" required><br><br>
			<label for="gender">Gender : </label><br><input type="radio" name="gender" value="male" checked> Male<br>
										 <input type="radio" name="gender" value="female"> Female<br>
										 <input type="radio" name="gender" value="other"> Other  <br><br>
			<label for="phone">PhoneNumber : </label><input type="text" name="phone" required><br><br>
			<input type="submit" value="Register">
		</form>
	</div>
</body>
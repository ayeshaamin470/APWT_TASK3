
<html>
	<head>
    <title>log in </title>
    <style>
  h1{
	  text-align: center;
  }
    h2 {
  position: absolute;
  left: 450px;
  top: 100px;
  
  border: 10px black;
  padding-top: 50px;
  padding-right: 50px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: Wheat;
  background-clip: padding-box;
}

 

  
  
  </style>
  </head>
  
	<body>
	

		
<h1><i>WELCOME TO EDUCARE</i></h1>
Log in to your Accout<br>
		<h2><form action="login" method="post">
{{csrf_field()}}
			<table>
				<tr>
					<img src="login.jpg" width="300" height="150">
					<td><input type="text" placeholder="TID" name="id" value="" class="form-control">@error('id')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>

				</tr>
				<tr>
					<td><input type="password" placeholder="Password" name="pass" value="" class="form-control">@error('pass')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>

				<tr>
					<td colspan="2"><input type="submit" value="Log in"></td>
				</tr>
				
     <tr><td> <input type="checkbox" checked="checked" name="remember"> Remember me</td></tr>

			</table>


		</form></h2>

	</body>
</html>

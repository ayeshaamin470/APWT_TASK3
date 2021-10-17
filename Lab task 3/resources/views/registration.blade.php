@extends('layout')
@section('content')
<html>
	<head></head>
	<body>
	
	<style>
	body {
  background-color: lightblue;
}
	h1{
		padding-top: 10px;
  padding-right: 30px;
  padding-bottom: 50px;
  padding-left: 80px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 700px;
  top: 60px;
font-size: 20px;}
h2{position: absolute;
left:35px;
top:30px;}

h3{
font-size:30px;}
	
	</style>
	

     <h2><img src="q.png" width="500" height="450"></h2>
		<h1><form action="/registration" method="post">
			{{csrf_field()}}
			<table>
				<h3>Register for EduCare (as Student)</h3>
			<tr>
			        <td rowspan="2"><span>Name</span></td>
						
                    <td>:<input type="text" placeholder="First name" name ="fname">
                    	 @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
			<tr>
                    
					<td>:<input type="text" placeholder="Last name" name = "lname"></td>
				</tr>
				<tr>
					<td><span>Username</span></td>
					<td>:<input type="text" placeholder="Username" name="uname">
						 @error('uname')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>

				</tr>
					<tr>
							<td><span>Password: </span></td>

					<td>:<input type="password" placeholder="Password" name="pass"> @error('pass')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
							<td><span>Confirm Password </span></td>

					<td>:<input type="password" placeholder="Password" name="cpass">
						 @error('cpass')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
							<td><span>Email</span></td>

					<td>:<input type="text" placeholder="Email" name="email" >
						 @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
				
					<td><span>Phone number</span></td>
                    
                    <td>:<input type="text" placeholder="Phone Number" name="pn"> 
                     @error('pn')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
				
				<td><span> Date of Birth:</span></td>
                    
                    <td>:<input type="text" placeholder="dob"name= "dob" > 
                     @error('dob')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
				<tr>
					<td><input type="submit" value="Signup "></td>
				</tr>
				
				
				
			</table>


		</form></h1>
		
	</body>
</html>
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
		padding-top: 15px;
  padding-right: 75px;
  padding-bottom: 50px;
  padding-left: 90px;
  background: White;
  background-clip: padding-box;
	position: absolute;
  left: 420px;
  top: 90px;
font-size: 20px;}
h2{position: absolute;
left:0px;
top:30px;}

h3{
font-size:30px;}
	
	</style>
	


		<h1><form action="/contact" method="post">
			{{csrf_field()}}
			<table>
				<h3>Contact Us</h3>
			<tr>
			        <td><span>Name </span></td>
						
                    <td><input type="text"name= "name" value="{{old('name')}}" class="form-control">
                    @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
			
				<tr>
							<td><span>Email</span></td>

					<td><input type="text"  name="email"value="{{old('email')}}" class="form-control" >
						@error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
				<td><span>Phone number</span></td>
                    
                    <td><input type="text" name="pn" value="{{old('pn')}}" class="form-control"> 
                    	@error('pn')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
				
				
				
				<tr>
					<td><span>Subject</span></td>
					 <td>:<textarea name="subject" style="height:100px"></textarea>
					
                        </td>
				</tr>
				
				<br>
				<tr>
					<td><input type="submit" value="Submit "></td>
				</tr>

			</table>


		</form></h1>
		
	</body>
</html>
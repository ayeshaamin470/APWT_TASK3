<html>
<head>
<style>
h2{
    padding-top: 15px;
  padding-right: 75px;
  padding-bottom: 50px;
  padding-left: 90px;
  background: pink;
  background-clip: padding-box;
  position: absolute;
  left: 480px;
  top: 60px;
font-size: 20px;}
</style>
	</head>
<body>

@extends('layout')
@section('content')
<h1> WELCOME TO OUR HOME PAGE, {{$session->username}}</h1>


<h2><center><table>
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Username</th>
            <th>Password</th>
            <th>Email</th>
            <th>phone no.</th>
            <th>DOB</th>
            <th></th>
        </tr>
        
            <tr>
                <td>{{$session->fname}}</td>
                <td>{{$session->lname}}</td>
                <td>{{$session->uname}}</td>
                <td>{{$session->pass}}</td>
                <td>{{$session->email}}</td>
                <td>{{$session->pn}}</td>
                <td>{{$session->dob}}</td>
                <td><a href="">Edit</a></td>
            </tr>
        
    </table></center></h2></body>
@stop
</html>
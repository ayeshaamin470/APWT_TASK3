<html>
<head>
	<title> hi shaily</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
h2{
left:0px;
top:30px;}

h3{
font-size:30px;}
  
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="http://127.0.0.1:8000/login">LOGIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="http://127.0.0.1:8000/contact">CONTACT<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/registration">REGISTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://127.0.0.1:8000/">HOME</a>
      </li>
      
    </ul>
  </div>
</nav>
	<div>
		@yield('content')
	</div>
	<footer> coppy rights</footer>
 </body>
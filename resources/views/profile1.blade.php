<html>
<head><title>Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-gray">
	
	<div class="w3-container w3-text-teal w3-center"><h2 class="w3-wide"><b>J-Learning | Kids World Of Learning</b></h2></div>
<div class="w3-bar w3-black">
	<div class="w3-bar-item"><h3 class="w3-wide w3-xxlarge fa fa-user"> Profile</h3></div>
	<div class="w3-bar-item w3-hover-green w3-button w3-right">Feedback</div>
	<div class="w3-bar-item w3-hover-green w3-button w3-right">Contact Us</div>
	<div class="w3-bar-item w3-hover-green w3-button w3-right">About</div>
</div>

<section class="showcase">
<div class="w3-container">
<form>
  @foreach($data as $value)

<label class="w3-text-teal ">User Name</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->UserName }}>
 
<label class="w3-text-teal">Name</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->Name }}>

<label class="w3-text-teal">Date Of Birth</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->DOB }}>

<label class="w3-text-teal">Level</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->Level }}>

<label class="w3-text-teal">Mobile No</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->MobileNO }}>

<label class="w3-text-teal">Email</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->Email }}>

<label class="w3-text-teal">Gender</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->Gender }}>

<label class="w3-text-teal">Password</label>
<input class="w3-input w3-border w3-round-xlarge" type="text" style="width:400px" value={{ $value->Passward }}><br>

<button class="w3-btn w3-teal">Update</button>
 @endforeach
</form>
</div>
</section>


<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">J-Learning</a></p>
</footer>

</body>
</html>
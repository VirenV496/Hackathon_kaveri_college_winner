<html>
<head>
    <title>College</title>
    <link href="css/w3.css" rel="stylesheet">
</head>
<body>
    <div class="w3-container w3-black">
<center><h2>Junior Learning</h2></center>

</div>  

     <div class="w3-container w3-margin w3-half w3-border w3-round-large w3-light-grey">

<h2 class="w3-center">Registration Form</h2>
<form action="/Insert" method="POST">
    @csrf
<label>Enter Name:-</label><br>
<input type="text" name="name" class=" w3-padding-small w3-input w3-round-large"><br>

<label>Enter Mobile Number:-</label><br>
<input type="text" name="mobile" class="w3-padding-small w3-input w3-round-large"><br>

<label>Select Date Of Birth:-</label><br>
<input type="date" name="dob" class="w3-padding-small w3-input w3-round-large"><br>

<label>Enter Email ID:-</label><br>
<input type="email" name="email" class=" w3-padding-small w3-input w3-round-large"><br>

<label>Enter Username:-</label><br>
<input type="text" name="username" class="w3-padding-small w3-input w3-round-large"><br>

<label>Enter Password:-</label><br>
<input type="password" name="password" class=" w3-padding-small w3-input w3-round-large"><br>

<label>Select Gender:-</label><br>
<select class="w3-input" name="gender">
    <option>Male</option>
    <option>Female</option>
</select><br>
<label>Select Level:-</label><br>
<select class="w3-input" name="level">
    <option>Beginner</option>
    <option>Intermediate</option>
       <option>Advance</option>
</select><br><br>
<center><input type="submit" name="" class="w3-button w3-blue"></center>
</form>
</div>  





  <div class="w3-container w3-margin w3-amber w3-third w3-round-large">

<h2 class="w3-center">Login Form</h2>
<form>
<label>Enter Username:-</label><br>
<input type="text" name="name" class=" w3-padding-small w3-input w3-round-large"><br>

<label>Enter Password:-</label><br>
<input type="password" name="mobile" class="w3-padding-small w3-input w3-round-large"><br><br>

<center><a href="/Dashboard" class="w3-button w3-blue">Login</a></center>
</form>
</div>

 <div class='w3-container w3-margin w3-amber w3-third w3-round-large'>

<h3 class='w3-center'>OTP is send to your given Mobile Number</h3>
<form>
<label>Enter OTP:-</label><br>
<input type='text' name='otp' class='w3-padding-small w3-input w3-round-large'><br>

<center><input type='submit' class='w3-button w3-blue'></center>
</form>
</div>
       
</body>
</html>
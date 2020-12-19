<!DOCTYPE html>
<html>
<head>
	<title>Junior Learning Activities</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>

	<div class="w3-bar w3-teal">
		<div class="w3-bar-item"><h2 class="w3-wide w3-xxlarge">Junior Learning Activities</h2></div>
		<div class="w3-bar-item w3-hover-black w3-button w3-right">Feedback</div>
		<div class="w3-bar-item w3-hover-black w3-button w3-right">Contact Us</div>
		<div class="w3-bar-item w3-hover-black w3-button w3-right">About</div>
    </div>

    
	<div class="w3-container w3-margin-left">
		<h3>Junior Learning Activities</h3>
	</div>


     @foreach($data as $value)
	<div class="w3-panel w3-light-gray w3-margin-left w3-leftbar w3-rightbar w3-round-xlarge">
		<h4>{{ $value->QuestionText }}</h4><br>
		

<input type="radio" name="Answer"><img src="{{  $value->Option1 }}" height="150" width="150" class="w3-margin">&nbsp;
<input type="radio" name="Answer"><img src="{{  $value->Option2 }}" height="150" width="150" class="w3-margin">&nbsp;
<input type="radio" name="Answer"><img src="{{  $value->Option3 }}" height="150" width="150" class="w3-margin">&nbsp;
<input type="radio" name="Answer"><img src="{{  $value->Option4 }}" height="150" width="150" class="w3-margin">&nbsp;
	</div>
@endforeach
	
<center><input type="submit" name="" class="w3-button w3-blue"></center>


</body>
</html>
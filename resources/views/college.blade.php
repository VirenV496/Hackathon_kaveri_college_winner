<html>
<head>
	<title>College</title>
    <link href="css/w3.css" rel="stylesheet">
</head>
<body>
    <div class="w3-container w3-teal">
 <img src="jelly.jpg" height="50" width="600">
</div>  
	<form>
        <center>
		<table border="1">
            <tr>
                <td>Username</td>
                <td>Password</td>
             </tr>      

            @foreach($data as $value)
              <tr>
                <td>{{ $value->Username }}</td>
                <td>{{ $value->Password }}</td>
             </tr>

             @endforeach
        </table>
    </center>
	</form>


<a href="testing.mp4"><img src="jelly.jpg" height="300" width="200"></a>

</body>
</html>
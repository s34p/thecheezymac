<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>

	<div style="background-color:#d0d3d3; padding: 50px; width:700px; margin:0 auto">
		<div style="text-align: center">
			<img src="http://thecheezymac.studio34productions.com/img/logo.png" alt="Logo"/>

		</div>
		<div style="border-radius: 5px; padding:20px; background-color:#ffffff; width:600px; margin: 0 auto">
			<h2 style="color:#bd2236;">Job Application</h2>
			<p>Name: {{$firstName}} {{$lastName}}</p>
			<p>Position: {{$position}}</p>
			<p>Start Date: {{$startDate}}</p>
			<p>Phone Number: {{$phone}}</p>
			@if($additionalInfo)
			<p style="font-style: italic">
				{{$additionalInfo}}
			</p>
			@endif
		</div>
	</div>
	</body>
</html>

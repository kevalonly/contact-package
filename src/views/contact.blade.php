<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
	<h1>Contact me Any time</h1>
	<form action="{{route('contact')}}" method="post">
		{!! csrf_field() !!}
		<input type="text" name="name" placeholder="Your Name please">
		<input type="email" name="email" placeholder="Your email please">
		<textarea name="message" placeholder="Enter Your Query"></textarea>
		<input type="submit" name="submit">
	</form>
</body>
</html>
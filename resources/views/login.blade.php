<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="{{ asset('clean_favicon_0.png') }}">
<title>Antibiotic Resistance Lab</title>
</head>
<body>
{!! Form::open(['url' => 'checklogin']) !!}
<!-- <form action="alex" method="post"> -->

<input type="hidden" name="idno" value="5911111">
<h2>Antibiotic Resistance Lab</h2>

<table border="0" width="500" cellpadding="5">
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Please login:</td>
</tr>
<tr>
		<td><input type="text" name="loginname"></td>
</tr>

</table>
<!-- <button type="button" onclick="alert('Hello World!')">Submit</button> -->
<input type="submit" value="Submit">
{!! Form::close() !!}
<!-- </form> -->
</body>
</html>


<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="{{ asset('clean_favicon_0.png') }}">
<title>Antibiotic Resistance Lab</title>
</head>
<body>
{!! Form::open(['url' => 'checkAdminLogin']) !!}

<input type="hidden" name="idno" value="5911111">
<h2>Antibiotic Resistance Lab Administration</h2>

<table border="0" width="500" cellpadding="5">
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Please login:</td>
</tr>
<tr>
		<td><input type="password" name="loginname"></td>
</tr>

</table>
<input type="submit" value="Submit">
{!! Form::close() !!}
</body>
</html>


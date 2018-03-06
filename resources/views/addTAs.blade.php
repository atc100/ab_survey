<!DOCTYPE html>
<html>
<head>
<title>Antibiotic Resistance Lab</title>
</head>
<body>
{{ Form::open(['url' => 'addNumTAs', 'method' => 'POST']) }}

<h2>Antibiotic Resistance Lab</h2>
<table border="0" width="500" cellpadding="5">

<tr>
	<td colspan="2" bgcolor="#cccccc">
		How many TAs would you like to add?</td>
</tr>
<tr>
		<td><input type="number" name="numTAs" value=""></td>
</tr>

</table>
<input type="submit" value="Submit">
{!! Form::close() !!}
<!-- </form> -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Antibiotic Resistance Lab</title>
</head>
<body>
Select student csv to upload:<br><br>
{{ Form::open(['url' => 'upload_students', 'method' => 'POST', 'files' => true]) }}

{{ Form::file('file') }}
<br><br>
{{ Form::submit('Import csv file') }}
<br><br>
{{ Form::close() }}
<!--Note:
<ul>
	<li>import file must contain only columns found in user table</li>
	<li>headings must match field names</li>
	<li>At the moment, this is: lname, fname, section, student_id</li>
</ul>-->
</body>
</html>

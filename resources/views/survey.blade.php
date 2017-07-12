<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="{{ asset('clean_favicon_0.png') }}">
<title>Antibiotic Resistance Lab</title>
</head>
<body>
<form action="ABsurveyUpdated.tpl" method="post">

<input type="hidden" name="idno" value="5911111">
<h2>Antibiotic Resistance Lab</h2>
<table border="0" width="500" cellpadding="5">
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Are your skin bacteria resistant to:
	</td>
</tr>
<tr>
<td align="right" valign="top">
Penicillin:</td><td><input type="radio" name="penR" value="1"> Yes <input type="radio" name="penR" value="0"> No</td>
</tr>
<tr>
	<td align="right" valign="top">
		Tetracycline:</td><td><input type="radio" name="tetR" value="1"> Yes <input type="radio" name="tetR" value="0.5"> Intermediate <input type="radio" name="tetR" value="0"> No</td>
</tr>
<tr>
	<td align="right" valign="top">
		Erythromycin:</td><td><input type="radio" name="erythR" value="1"> Yes <input type="radio" name="erythR" value="0.5"> Intermediate <input type="radio" name="erythR" value="0"> No</td>
</tr>
<tr>
	<td align="right" valign="top">
		Oxacillin:</td><td><input type="radio" name="oxaR" value="1"> Yes <input type="radio" name="oxaR" value="0.5"> Intermediate <input type="radio" name="oxaR" value="0"> No</td>
</tr>
<tr>
	<td align="right" valign="top" bgcolor="#cccccc">
		Sex:</td><td><input type="radio" name="sex" value="M"> Male <input type="radio" name="sex" value="F"> Female</td>
</tr>

<tr>
	<td align="right" valign="top" bgcolor="#cccccc">
		Age:
	</td>
	<td>
		<select name="age">
			<option value="1">16-20
			<option value="2">21-25
			<option value="3">26-30
			<option value="4">31+
		</select>
	</td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Which of the following best describes your living situation:
	</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="living" value="1"></td><td>Live alone</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="living" value="2"></td><td>Dorm or group living involving more than 5 unrelated adults</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="living" value="3"></td><td>5 or fewer unrelated adult housemates</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="living" value="4"></td><td>Family with children over 6 years of age</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="living" value="5"></td><td>Family with children 6 years of age or younger</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		How long has it been since you last used an antibiotic:
	</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="ABuse" value="1"></td><td>Using one now</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="ABuse" value="2"></td><td>Within the last year</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="ABuse" value="3"></td><td>More than a year but within the last 5 years</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="ABuse" value="4"></td><td>More than 5 years ago</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="ABuse" value="5"></td><td>Have never used an antibiotic</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		Have you used acne medication:
	</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="acne" value="1"></td><td>Using it now</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="acne" value="2"></td><td>Used within the last year</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="acne" value="3"></td><td>Yes, but not within the last year</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="acne" value="4"></td><td>Never</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		Do you use makeup (foundation, blush, etc)?</td>
</tr>
<tr>
<td><input type="radio" name="makeup" value="1"> Yes<input type="radio" name="makeup" value="0"> No</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		Do you regularly use antibacterial soap or cleaning products?</td>
</tr>
<tr>
<td><input type="radio" name="soap" value="1"> Yes <input type="radio" name="soap" value="0"> No</td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Describe your handwashing habits (beyond bathing & showering)
	</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="handwash" value="1"></td><td>Frequently (&gt;5 times daily), using soap or anti-bacterial hand lotion</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="handwash" value="2"></td><td>Before most meals, after most restroom visits</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="handwash" value="3"></td><td>After most restroom visits</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="handwash" value="4"></td><td>Occasionally before meals or after restroom visits</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="handwash" value="5"></td><td>Only if they get dirty</td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Describe your diet
	</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="diet" value="1"></td><td>Strictly vegetarian (vegan)</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="diet" value="2"></td><td>Plants & dairy</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="diet" value="3"></td><td>Plants, dairy, fish & poultry</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="diet" value="4"></td><td>All of the above, plus red meat</td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		If you eat red meat, how do you like it prepared?
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="meatPrep" value="1"></td><td>Well-done</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="meatPrep" value="2"></td><td>Medium or medium well-done</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="meatPrep" value="3"></td><td>Rare or medium rare</td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		Considering all that you eat, is your diet
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="dietOrganic" value="1"></td><td>Entirely organic</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="dietOrganic" value="2"></td><td>Organic vegetables & dairy, meats not necessarily organic</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="dietOrganic" value="3"></td><td>Mostly organic, but some vegetables and/or some meats not organic</td>
</tr>
<tr>
	<td align="right" valign="top"><input type="radio" name="dietOrganic" value="4"></td><td>Little or no organic foods</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		Do you work at, volunteer or regularly visit a hospital or long-term care facility?</td>
</tr>
<tr>
<td><input type="radio" name="hosp" value="1"> Yes <input type="radio" name="hosp" value="0"> No</td>
</tr>

<tr>
	<td colspan="2" bgcolor="#cccccc">
		What country were you born in?</td>
</tr>
<tr>
		<td><input type="text" name="nation" value="United States"></td>
</tr>
<tr>
	<td colspan="2" bgcolor="#cccccc">
		What country have you primarily resided in for the last 5 years?</td>
</tr>
<tr>
		<td><input type="text" name="nation5yrs" value="United States"></td>
</tr>

</table>
<input type="submit" value="Submit">
</form>
</body>
</html>


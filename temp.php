<html><head><title>An Example Form</title>
<style>.signup { border: 1px solid #999999;
text-align: center;
font: normal 14px helvetica; color:#444444; }</style>
<script>
function validate(form) {
fail = validateForename(form.forename.value)
fail += validateSurname(form.surname.value)
fail += validateUsername(form.username.value)
fail += validatePassword(form.password.value)
fail += validateAge(form.age.value)
fail += validateEmail(form.email.value)
if (fail == "") return true
else { alert(fail); return false }
}
</script></head><body>
	<span> This is Cool </span>
	<p id='para1'> This is paragraph with id 'para1' </p>
<table class="signup" border="0" cellpadding="2"
cellspacing="5" bgcolor="#eeeeee" align="center">
<th colspan="2" align="center">Signup Form</th>
<form method="post" action="adduser.php"
onSubmit="return validate(this)">
<tr><td>Forename</td><td><input type="text" maxlength="32"
name="forename" /></td>
</tr><tr><td>Surname</td><td><input type="text" maxlength="32"
name="surname" /></td>
</tr><tr><td>Username</td><td><input type="text" maxlength="16"
name="username" /></td>
</tr><tr><td>Password</td><td><input type="text" maxlength="12"
name="password" /></td>
</tr><tr><td>Age</td><td><input type="text" maxlength="3"
name="age" /></td>
</tr><tr><td>Email</td><td><input type="text" maxlength="64"
name="email" /></td>
</tr><tr><td colspan="2" align="center">
<input type="submit" value="Signup" /></td>
</tr></form></table>
<br>
<!-- unordered list -->
3 <ul> Unordered List
4 <li>Pen</li>
5 <li>Pencil</li>
6 <li>Eraser</li>
7 </ul>
8
9 <ul type="circle"> Change bullets : 'square', 'circle' or 'disc'
10 <li>Pen</li>
11 <li>Pencil</li>
12 <li>Eraser</li>
13 </ul>
14
15 <!-- ordered list -->
16 <ol> Ordered List
17 <li>Pen</li>
18 <li>Pencil</li>
19 <li>Eraser</li>
20 </ol>
21
22 <ol type='i'> Change style : 'i', 'I', '1', 'a' or 'A'
23 <li>Pen</li>
24 <li>Pencil</li>
25 <li>Eraser</li>
26 </ol>
27
28 <ol type='i' start="5"> Start from 'v'
29 <li>Pen</li>
30 <li>Pencil</li>
31 <li>Eraser</li>
32 </ol>
33
34 <!-- Definition list -->
35 <dl>
36 <dt> <h4>HTML Definition List</h4> </dt>
37 <dd> HTML is easy </dd>
38 <dd> HTML is good </dd>
39 </dl>
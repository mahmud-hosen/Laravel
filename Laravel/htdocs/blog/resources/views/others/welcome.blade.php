<!DOCTPE html>
<html>
<head>
<title>Student Details</title>
</head>
<body>
<table border = "1">
<tr>
<td>Id</td>
<td>Name</td>
<td>Email</td>
<td>Password</td>

</tr>
@foreach ($users as $user)
<tr>
<td>{{ $user->id }}</td>
<td>{{ $user->name }}</td>
<td>{{ $user->email }}</td>
<td>{{ $user->password }}</td>

</tr>
@endforeach
</table>
</body>
</html>
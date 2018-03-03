<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
</head>
<body>
<h1>Membership</h1>
<table style="width:100%">
    <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>Phone</th>
        <th>Email</th>
        <th>State</th>
        <th>Gender</th>
        <th>Seeking</th>
        <th>Premium</th>
        <th>Interests</th>
    </tr>

        <repeat group="{{ @members }}" value="{{ @member }}">
            <tr>
            <td>{{ @member['fname'] }}</td>
            <td>{{ @member['lname'] }}</td>
            <td>{{ @member['age'] }}</td>
            <td>{{ @member['phone'] }}</td>
            <td>{{ @member['email'] }}</td>
            <td>{{ @member['state'] }}</td>
            <td>{{ @member['gender'] }}</td>
            <td>{{ @member['seeking'] }}</td>
            <td><check if="{{ @member['premium']}} == 1">
                <input type="checkbox" checked>
                </check>
                <check if="{{ @member['premium']}} != 1"><input type="checkbox"></check></td>
            <td>{{ @member['interests'] }}</td>
            </tr>
        </repeat>

</table>
</body>
</html>

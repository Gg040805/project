
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
</head>
<body>
    <form action="/userseeder" method="post"></form>
    <table border="1">
        <tr>
            <th>Student Name</th>
            <th>Student Class</th>
            <th>Student Mark</th>
        </tr>
        @foreach ($member as $members)
        <tr>
            <td>{{ $members->p_name }}</td>
            <td>{{ $members->p_class }}</td>
            <td>{{ $members->p_mark }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
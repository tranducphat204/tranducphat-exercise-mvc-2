<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>

<body>
    <h1>List of Students</h1>
    <ul>
        @foreach ($students as $student)
        <li>{{ $student->name }}</li>
        @endforeach
    </ul>
</body>

</html>
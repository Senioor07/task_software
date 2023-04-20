<!DOCTYPE html>
<html>
    <head>
        <title>Students List</title>
    </head>
    <body>
        <h1>List of Students</h1>
        <ul>
            @foreach ($students as $student)
                <li>{{ $student }}</li>
            @endforeach
        </ul>
    </body>
</html>

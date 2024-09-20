<!-- resources/views/cases/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cases</title>
</head>
<body>
    <h1>List of Cases</h1>
    <ul>
        @foreach($cases as $case)
            <li>{{ $case->case_number }} - {{ $case->case_type }}</li>
        @endforeach
    </ul>
</body>
</html>

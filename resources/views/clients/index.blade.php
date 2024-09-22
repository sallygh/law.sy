<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
</head>
<body>
    <h1>List of Clients</h1>
    <ul>
        @foreach($clients as $client)
            <li>{{ $client->full_name }} - {{ $client->phone_number }}</li>
        @endforeach
    </ul>
</body>
</html>

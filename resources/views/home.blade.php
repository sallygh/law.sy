<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الصفحة الرئيسية</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .btn-custom {
            border-radius: 50px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="text-center">
        <h1>الصفحة الرئيسية</h1>
        <a href="{{ route('cases.create') }}" class="btn btn-primary btn-custom">إدخال قضية</a>
        <a href="{{ route('cases.index') }}" class="btn btn-secondary btn-custom">تصفح القضايا</a>
        <a href="{{ route('clients.create') }}" class="btn btn-success btn-custom">إدخال الموكل</a>
        <a href="#" class="btn btn-danger btn-custom">تصفح الموكلين</a>
        <a href="#" class="btn btn-warning btn-custom">إضافة مهام</a>
        <a href="#" class="btn btn-info btn-custom">بحث</a>
    </div>
</body>
</html>

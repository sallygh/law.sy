<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدخال موكل جديد</title>
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
    <div class="container">
        <h1 class="text-center">إدخال موكل جديد</h1>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="full_name">الاسم الثلاثي:</label>
                <input type="text" id="full_name" name="full_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone_number">رقم الهاتف:</label>
                <input type="text" id="phone_number" name="phone_number" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary btn-custom">إرسال</button>
        </form>
    </div>
</body>
</html>

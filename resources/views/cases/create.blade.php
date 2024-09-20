<!-- resources/views/cases/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدخال قضية جديدة</title>
</head>
<body>
    <h1>إدخال قضية جديدة</h1>
    <form action="{{ route('cases.store') }}" method="POST">
        @csrf
        <div>
            <label for="case_number">رقم القضية:</label>
            <input type="text" id="case_number" name="case_number" required>
        </div>
        <div>
            <label for="case_type">نوع القضية:</label>
            <input type="text" id="case_type" name="case_type" required>
        </div>
        <div>
            <label for="plaintiff_name">اسم المدعي:</label>
            <input type="text" id="plaintiff_name" name="plaintiff_name" required>
        </div>
        <div>
            <label for="defendant_name">اسم المدعى عليه:</label>
            <input type="text" id="defendant_name" name="defendant_name" required>
        </div>
        <button type="submit">إرسال</button>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدخال قضية جديدة</title>
    <!-- إضافة روابط Bootstrap و Bootstrap RTL -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-rtl@5.3.0/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="text-center my-4">إدخال قضية جديدة</h1>
    <form action="{{ route('cases.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="case_number" class="form-label">رقم القضية:</label>
            <input type="text" id="case_number" name="case_number" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="case_type" class="form-label">نوع القضية:</label>
            <input type="text" id="case_type" name="case_type" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="plaintiff_name" class="form-label">اسم المدعي:</label>
            <input type="text" id="plaintiff_name" name="plaintiff_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="defendant_name" class="form-label">اسم المدعى عليه:</label>
            <input type="text" id="defendant_name" name="defendant_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
    <!-- إضافة سكريبتات Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدخال قضية جديدة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-rtl@5.3.0/dist/css/bootstrap-rtl.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <style>
        body {
            direction: rtl;
            text-align: right;
        }
        .container {
            max-width: 600px;
            margin: auto;
        }
    </style>
</head>
<body class="container">
    <h1 class="text-center my-4">إدخال قضية جديدة</h1>
    <form id="caseForm" action="{{ route('cases.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="case_number" class="form-label">رقم القضية:</label>
            <input type="text" id="case_number" name="case_number" class="form-control" value="{{ $nextId }}" readonly>
        </div>
        <div class="mb-3">
            <label for="case_type" class="form-label">نوع القضية:</label>
            <select id="case_type" name="case_type" class="form-control" required>
                <option value="">اختر نوع القضية</option>
                <option value="مدني">مدني</option>
                <option value="شرعي">شرعي</option>
                <option value="جزائي">جزائي</option>
                <option value="صلحي">صلحي</option>
            </select>
        </div>
        <div class="mb-3">
    <label for="case_subject" class="form-label">موضوع الدعوى:</label>
    <select id="case_subject" name="case_subject" class="form-control" required>
        <option value="">اختر موضوع الدعوى</option>
    </select>
</div>

        <div class="mb-3">
            <label for="plaintiff_name" class="form-label">اسم المدعي:</label>
            <select id="plaintiff_name" name="plaintiff_name" class="form-control" required>
                <option value="">ابحث عن اسم المدعي</option>
                @foreach($clients as $client)
                    <option value="{{ $client->full_name }}">{{ $client->full_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="defendant_name" class="form-label">اسم المدعى عليه:</label>
            <input type="text" id="defendant_name" name="defendant_name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">إرسال</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
    $('#plaintiff_name').select2({
        tags: true,
        placeholder: 'ابحث عن اسم المدعي',
        allowClear: true
    });

    $('#case_type').change(function() {
        var caseType = $(this).val();
        var caseSubject = $('#case_subject');
        caseSubject.empty();
        caseSubject.append('<option value="">اختر موضوع الدعوى</option>');

        if (caseType === 'مدني') {
            caseSubject.append('<option value="بيع شقة">بيع شقة</option>');
            caseSubject.append('<option value="بيع سيارة">بيع سيارة</option>');
        } else if (caseType === 'شرعي') {
            caseSubject.append('<option value="مخالعة">مخالعة</option>');
            caseSubject.append('<option value="تفريق">تفريق</option>');
            caseSubject.append('<option value="طلاق">طلاق</option>');
            caseSubject.append('<option value="زواج">زواج</option>');
        }
    });

    $('#caseForm').on('submit', function(e) {
        var plaintiffName = $('#plaintiff_name').val();
        var options = $('#plaintiff_name option').map(function() { return this.value; }).get();

        if (!options.includes(plaintiffName)) {
            e.preventDefault();
            window.location.href = 'http://law.test:8081/clients/create';
        }
    });
});

        $(document).ready(function() {
            $('#plaintiff_name').select2({
                tags: true,
                placeholder: 'ابحث عن اسم المدعي',
                allowClear: true
            });

            $('#caseForm').on('submit', function(e) {
                var plaintiffName = $('#plaintiff_name').val();
                var options = $('#plaintiff_name option').map(function() { return this.value; }).get();

                if (!options.includes(plaintiffName)) {
                    e.preventDefault();
                    window.location.href = 'http://law.test:8081/clients/create';
                }
            });
        });
    </script>
</body>
</html>

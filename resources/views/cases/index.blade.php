<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cases</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <!-- DataTables Buttons CSS -->
    <link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>List of Cases</h1>
        <table id="casesTable" class="table table-striped">
            <thead>
                <tr>
                    <th>Case Number</th>
                    <th>Case Type</th>
                    <th>Case Subject</th>
                    <th>Plaintiff Name</th>
                    <th>Defendant Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cases as $case)
                    <tr>
                        <td>{{ $case->case_number }}</td>
                        <td>{{ $case->case_type }}</td>
                        <td>{{ $case->case_subject }}</td>
                        <td>{{ $case->plaintiff_name }}</td>
                        <td>{{ $case->defendant_name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#casesTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>
</html>

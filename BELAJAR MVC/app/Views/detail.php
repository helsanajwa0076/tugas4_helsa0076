<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DETAIL USERS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #E8F5E9; 
        }

        .card {
            background-color: #C8E6C9; 
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            padding: 20px;
        }

        h5 {
            color: #388E3C; 
        }

        .btn-custom {
            background-color: #81C784; 
            color: white; 
            border: none;
        }

        .btn-custom:hover {
            background-color: #66BB6A; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
            <div class="row p-3">
                <div class="col-12">
                    <h2 class="text-center mb-4">Detail Pengguna</h2> <!-- Tambahan tulisan Detail Pengguna -->
                    <h5>ID: <?php echo htmlspecialchars($data['id']); ?></h5>
                    <h5>Name: <?php echo htmlspecialchars($data['name']); ?></h5>
                    <h5>Email: <?php echo htmlspecialchars($data['email']); ?></h5>

                    <a href="<?php echo htmlspecialchars($_SERVER['HTTP_REFERER'] ?? 'index.php'); ?>" 
                       class="btn btn-custom mt-3">Kembali</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>

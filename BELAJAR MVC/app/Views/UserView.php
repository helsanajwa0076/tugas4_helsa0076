<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BELAJAR MVC</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #E8F5E9; 
        }

        .header {
            background-color: #C8E6C9; 
            color: #2E7D32; 
        }

        .btn-green {
            background-color: #81C784; 
            color: white;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-green:hover {
            background-color: #66BB6A; 
        }

        .table {
            background-color: #C8E6C9; 
        }

        .table thead {
            background-color: #A5D6A7; 
        }

        .table tbody tr:hover {
            background-color: #B9FBC0; 
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="header d-flex justify-content-between align-items-center p-3 rounded shadow">
            <h1>User Details</h1>
            <a href="index.php?action=add" class="btn btn-green">Add User</a>
        </div>

        <div class="mt-4">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($user as $data): ?>
                        <tr>
                            <th scope="row"><?php echo $no++; ?></th>
                            <td><?php echo htmlspecialchars($data['name']); ?></td>
                            <td><?php echo htmlspecialchars($data['email']); ?></td>
                            <td>
                                <a href="index.php?action=view&id=<?php echo $data['id']; ?>" 
                                   class="btn btn-green btn-sm">View</a>
                                <a href="index.php?action=edit&id=<?php echo $data['id']; ?>" 
                                   class="btn btn-green btn-sm">Edit</a>
                                <a href="index.php?action=delete&id=<?php echo $data['id']; ?>" 
                                   class="btn btn-green btn-sm" 
                                   onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

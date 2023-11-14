<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Money Loan</title>
    <script src="https://kit.fontawesome.com/13c062a83b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha384-pzjw8f+ua8R3FqzYXhXn2aUr5IhLYgK2UfZl4/q6iUZCrqDj2Kk5FOzuzdcj2hcb" crossorigin="anonymous">
    
    <style>
        body {
            margin: 0; /* Reset default margin */
        }
        nav {
            background-color: #001f3f; /* Warna biru tua */
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1;
        }
        /* Add the following style to change the navbar color */
        .navbar {
            background-color: #001f3f; /* Warna biru tua */
            color: #fff;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 mb-5 bg-body-tertiary rounded">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Mon€y laun<i class="fa-solid fa-scale-balanced"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <!-- Fix the fa-solid class -->
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="../admin/index.php"> <i class="fa-solid fa-house"></i> Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="../pelangan/pelanggan.php"> <i class="fa-solid fa-user"></i> Costumer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="../transaksi/transaksi.php"> <i class="fa-solid fa-note-sticky"></i> Transaction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="../admin/laporan.php"> <i class="fa-solid fa-paperclip"></i> Report</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa-solid fa-gear"></i> Settings
                        </a>
                        <div class="dropdown-menu fs-6" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="../admin/ganti_password.php"><i class="fa-solid fa-lock"></i>  Ganti Password</a>
                            <a class="dropdown-item" href="../harga/harga.php"><i class="fa-solid fa-signal"></i>  Harga per Kilo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="../admin/logout.php"><i class="fa-solid fa-right-from-bracket"></i> Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"
        integrity="sha384-3rSX+6v9VXE089sHPEc48QlOB6ZJirwB0q5s60I+wxzOzAinfmEeVqlYFE0J/MBU"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>

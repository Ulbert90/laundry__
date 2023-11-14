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
            display: flex;
            flex-direction: column;
            min-height: 100vh; /* Set the minimum height of the body to full viewport height */
            margin: 0; /* Remove default margin */
        }

        footer {
            background: url('https://img.freepik.com/free-vector/neon-abstract-border-dark-blue-blog-banner-template-vector_53876-140475.jpg?w=826&t=st=1699363536~exp=1699364136~hmac=d04d121d763282ed781fcc532a57bed8d053aaac556b20045fcabe0d89e6e614') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: auto; /* Push the footer to the bottom */
            width: 100%;
            z-index: 1;
            
        }
    </style>
</head>
<body>

<footer class="footer text-center dll" id="kontak">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-5 mb-lg-0 footer-content">
                <h4 class="fas fa-map-marker-alt m-3 text-uppercase mb-4">Location</h4>
                <p class="lead mb-0 text-white fw-bold">
                    SakmaDik, Central city, Niggaway
                </p>
            </div>

            <div class="col-lg-4 mb-2 mb-lg-0 footer-content">
                <h4 class="fas fa-hashtag text-uppercase mb-4">Social Media</h4><br>
                <a class="btn btn-outline-danger btn-social mx-1 fs-5" href="{{ $instagram }}" target="blank"><i
                        class="fab fa-instagram"></i></a>
                <a class="btn btn-outline-primary btn-social mx-1 fs-5" href="{{ $facebook }}" target="blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-info btn-social-x-twitter mx-1 fs-5" href="{{ $twitter }}" target="blank"><i
                        class="fab fa-twitter"></i></a>
            </div>

            <div class="col-lg-4 justify-content-center footer-content">
                <h4 class="fa-solid fa-magnifying-glass text-uppercase mb-4">About</h4>
                <a class="text-white text-center" href="https://github.com/Ulbert90"><i>Mon€y laun<i class="fas fa-balance-scale"></i></i></a>
                <p class="lead mb-0 text-white fw-bold">
                    Mon€y laun adalah jasa cuci uang hasil korupsi anda
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

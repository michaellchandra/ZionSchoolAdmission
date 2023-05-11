<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Website</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">

    <style>
        .container1 {
            margin: auto;
            width: fit-content;
            padding-top: 10%;
        }

        .container2 {
            margin: auto;
            width: fit-content;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: white;
            color: black;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
            color: white;
        }
    </style>

<script>
        function generateRandomNumber() {
            // Generate a random 12-digit number
            var randomNumber = Math.floor(Math.random() * 900000000000) + 100000000000;

            // Update the number in the HTML element
            document.getElementById("randomNumber").textContent = randomNumber;
        }

        // Generate a random number when the page loads
        window.addEventListener('load', function() {
            generateRandomNumber();
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container1 mt-4">
        <h1>Nomor Formulir Anda</h1>
    </div>

    <div class="container2 mt-4">
        <h1 id="randomNumber"></h1>
    </div>

    <div class="container2 mt-4">
        <a href="http://127.0.0.1:8000/isiBiodata.php" class="btn">Isi Biodata</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
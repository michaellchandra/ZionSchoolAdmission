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

        .container3 {
            display: flex;
            align-items: center;
        }

        .p1 {
            margin-right: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            text-decoration: none;
            background-color: #45a049;
            color: white;
            border: none;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: #70c174;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: scale(1.1);
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
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

        function generateRandomPassword() {
            // Define characters for password generation
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+=-';

            // Define password length
            var passwordLength = 12;

            // Initialize an empty password string
            var password = '';

            // Generate random characters to form the password
            for (var i = 0; i < passwordLength; i++) {
                var randomIndex = Math.floor(Math.random() * characters.length);
                password += characters.charAt(randomIndex);
            }

            // Update the password in the HTML element
            document.getElementById("randomPassword").textContent = password;
        }

        // Generate a random password when the page loads
        window.addEventListener('load', function() {
            generateRandomPassword();
        });
    </script>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Website</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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


    <!-- Nomor Formulir -->
    <div class="container1 mt-4">
        <h1>Nomor Formulir Anda</h1>
    </div>

    <div class="container2 mt-4">
        <h1 id="randomNumber"></h1>
    </div>

    <!-- Auto Password -->
    <div class="container2 mt-4">
        <div class="container3">
            <p>Password Anda: </p>
            <p> &nbsp; </p>
            <p id="randomPassword"></p>
        </div>
    </div>

    <!-- Button Isi Biodata -->
    <div class="container2 mt-4">
        <a href="http://127.0.0.1:8000/isiBiodata.php" class="btn">Isi Biodata</a>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Pet Grooming</title>
</head>

<body>
    <header>
        <h1>Welcome to Pet Grooming</h1>
        <nav>
            <a href="login.php">Login</a>
            <a href="signup.php">Sign Up</a>
            <a href="appointments.php">Appointments</a>
        </nav>
    </header>
    <div class="container">
        <h2>Book Your Pet's Grooming Appointment</h2>
        <p>We provide the best care for your pets.</p>

        <!-- Grooming Packages Table -->
        <div class="grooming-table-wrapper">
            <h3>Grooming Packages</h3>
            <table class="grooming-table">
                <thead>
                    <tr>
                        <th>Package</th>
                        <th>Price (PHP)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Dog Full Grooming - Small Breed (10kg below)</td>
                        <td>600.00</td>
                    </tr>
                    <tr>
                        <td>Dog Full Grooming - Medium Breed (10kg to 20kg)</td>
                        <td>800.00</td>
                    </tr>
                    <tr>
                        <td>Dog Full Grooming - Large Breed (20kg to 30kg)</td>
                        <td>1,000.00</td>
                    </tr>
                    <tr>
                        <td>Dog Full Grooming - Giant Size (XL) (30kg to 40kg)</td>
                        <td>1,300.00</td>
                    </tr>
                    <tr>
                        <td>Dog Full Grooming - Giant Size (XL) (40kg to 50kg)</td>
                        <td>1,600.00</td>
                    </tr>
                    <tr>
                        <td>Dog Full Grooming - Giant Size (3XL) (50kg to 60kg)</td>
                        <td>1,900.00</td>
                    </tr>
                    <tr>
                        <td>Full Grooming for Cats</td>
                        <td>800.00</td>
                    </tr>
                    <tr>
                        <td>Bath & Blowdry - Small Breed (10kg below)</td>
                        <td>300.00</td>
                    </tr>
                    <tr>
                        <td>Bath & Blowdry - Medium to Large Breed (16kg and up)</td>
                        <td>500.00</td>
                    </tr>
                    <tr>
                        <td>Medicated Bath & Blowdry - Small Breed (10kg below)</td>
                        <td>300.00</td>
                    </tr>
                    <tr>
                        <td>Medicated Bath & Blowdry - Medium</td>
                        <td>500.00</td>
                    </tr>
                    <tr>
                        <td>Medicated Bath & Blowdry - Large Breed</td>
                        <td>600.00</td>
                    </tr>
                    <tr>
                        <td>Dematting</td>
                        <td>500.00</td>
                    </tr>
                    <tr>
                        <td>Pet Massage for All Breed Type</td>
                        <td>200.00</td>
                    </tr>
                    <tr>
                        <td>Teeth Brushing</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td>Mouthwash</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td>Ear Cleaning</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td>Eyewash Application</td>
                        <td>100.00</td>
                    </tr>
                    <tr>
                        <td>Organic Shampoo Application</td>
                        <td>100.00</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Credits Section -->
    <footer>
        <p>Created with ❤️ by <strong>Rodney R. Domdom</strong></p>
        <p>&copy; 2024 Pet Grooming. All rights reserved.</p>
    </footer>
</body>

</html>

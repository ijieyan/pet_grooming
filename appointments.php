<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $pet_name = $_POST['pet_name'];
    $service = $_POST['service'];
    $appointment_date = $_POST['appointment_date'];
    $user_id = $_SESSION['user_id'];

    // Insert appointment into the database
    $stmt = $pdo->prepare("INSERT INTO appointments (user_id, pet_name, service, appointment_date) VALUES (:user_id, :pet_name, :service, :appointment_date)");
    $stmt->execute(['user_id' => $user_id, 'pet_name' => $pet_name, 'service' => $service, 'appointment_date' => $appointment_date]);

    // Redirect to the dashboard after booking the appointment
    header("Location: dashboard.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/appointments.css">
    <title>Book Appointment</title>
</head>
<body>
    <header>
        <h1>Book an Appointment</h1>
    </header>
    <div class="container">
        <!-- Back button -->
        <a href="dashboard.php" class="back-button">← Back to Dashboard</a>
        
        <form method="POST" action="">
            <input type="text" name="pet_name" placeholder="Pet Name" required>
            
            <select name="service" required>
                <option value="" disabled selected>Select Service</option>
                <option value="Dog Full Grooming - Small Breed (10kg below)">Dog Full Grooming - Small Breed (10kg below) - 600.00</option>
                <option value="Dog Full Grooming - Medium Breed (11kg to 20kg)">Dog Full Grooming - Medium Breed (11kg to 20kg) - 800.00</option>
                <option value="Dog Full Grooming - Large Breed (21kg to 30kg)">Dog Full Grooming - Large Breed (21kg to 30kg) - 1,000.00</option>
                <option value="Dog Full Grooming - Giant Size (XL) (31kg to 40kg)">Dog Full Grooming - Giant Size (XL) (31kg to 40kg) - 1,300.00</option>
                <option value="Dog Full Grooming - Giant Size (2XL) (41kg to 50kg)">Dog Full Grooming - Giant Size (2XL) (41kg to 50kg) - 1,600.00</option>
                <option value="Dog Full Grooming - Giant Size (3XL) (51kg to 60kg)">Dog Full Grooming - Giant Size (3XL) (51kg to 60kg) - 1,900.00</option>
                <option value="Full Grooming for Cats">Full Grooming for Cats - 800.00</option>
                <option value="Bath & Blowdry - Small Breed (10kg below)">Bath & Blowdry - Small Breed (10kg below) - 300.00</option>
                <option value="Bath & Blowdry - Medium to Large Breed (11kg and up)">Bath & Blowdry - Medium to Large Breed (11kg and up) - 500.00</option>
                <option value="Medicated Bath & Blowdry - Small Breed (10kg below)">Medicated Bath & Blowdry - Small Breed (10kg below) - 300.00</option>
                <option value="Medicated Bath & Blowdry - Medium">Medicated Bath & Blowdry - Medium - 500.00</option>
                <option value="Medicated Bath & Blowdry - Large Breed">Medicated Bath & Blowdry - Large Breed - 700.00</option>
                <option value="Dematting">Dematting - 500.00</option>
                <option value="Pet Massage for All Breed Type">Pet Massage for All Breed Type - 200.00</option>
                <option value="Teeth Brushing">Teeth Brushing - 100.00</option>
                <option value="Mouthwash">Mouthwash - 100.00</option>
                <option value="Ear Cleaning">Ear Cleaning - 100.00</option>
                <option value="Eyewash Application">Eyewash Application - 100.00</option>
                <option value="Organic Shampoo Application">Organic Shampoo Application - 100.00</option>
            </select>
            
            <input type="datetime-local" name="appointment_date" required>
            <input type="submit" value="Book Appointment">
        </form>
    </div>
</body>
</html>

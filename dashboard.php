<?php
session_start();
include 'includes/db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Handle appointment cancellation
if (isset($_GET['cancel_id'])) {
    $appointment_id = $_GET['cancel_id'];

    // Prepare and execute the SQL query to delete the appointment
    $stmt = $pdo->prepare("DELETE FROM appointments WHERE id = :appointment_id AND user_id = :user_id");
    $stmt->execute(['appointment_id' => $appointment_id, 'user_id' => $user_id]);

    // Redirect to the dashboard to reflect the changes
    header("Location: dashboard.php");
    exit;
}

$stmt = $pdo->prepare("SELECT * FROM appointments WHERE user_id = :user_id");
$stmt->execute(['user_id' => $user_id]);
$appointments = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Your Appointments</title>
</head>
<body>
    <header>
        <h1>Your Appointments</h1>
        <nav>
            <a href="appointments.php">Book Appointment</a>
            <a href="logout.php">Logout</a>
        </nav>
    </header>
    <div class="container">
        <h2>Upcoming Appointments</h2>
        <?php if (count($appointments) > 0): ?>
            <table>
                <tr>
                    <th>Pet Name</th>
                    <th>Service</th>
                    <th>Appointment Date</th>
                    <th>Action</th>
                </tr>
                <?php foreach ($appointments as $appointment): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($appointment['pet_name']); ?></td>
                        <td><?php echo htmlspecialchars($appointment['service']); ?></td>
                        <td><?php echo htmlspecialchars(date('Y-m-d H:i', strtotime($appointment['appointment_date']))); ?></td>
                        <td>
                            <!-- Cancel Appointment Button -->
                            <a href="dashboard.php?cancel_id=<?php echo $appointment['id']; ?>" class="cancel-btn">Cancel Appointment</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php else: ?>
            <p>You have no upcoming appointments.</p>
        <?php endif; ?>
    </div>
</body>
</html>

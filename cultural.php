<?php
// Check Session login (Protected Page)
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login first to access this page!'); window.location.href='login.php';</script>";
    exit();
}

// database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dayroute_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch opening hours and ticket prices from database for cultural places
$sql = "SELECT * FROM cultural_places";
$result = $conn->query($sql);
$places = [];
if ($result && $result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $places[$row['title']] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayyRoute - Cultural Attractions</title>
    <!-- CSS file connection -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Header & Navigation Bar  -->
    <header style="background-color: #150533; padding: 20px 60px;">
        <nav class="navbar">
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt="DayyRoute Logo"></a>
            </div>
            <div class="nav-right">
                <ul class="nav-links">
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="nature.php">NATURE</a></li>
                    <li><a href="religious.php">RELIGIOUS</a></li>
                    <li><a href="cultural.php" style="color: #00bcd4;">CULTURAL</a></li>
                    <li><a href="map.html">MAP</a></li>
                </ul>
                <a href="logout.php" class="login-btn">LOGOUT</a>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main class="explore-section" style="min-height: 60vh;">
        <div class="explore-title">
            <h2>Cultural Attractions</h2>
            <p>Explore the rich heritage and cultural landmarks along our route.</p>
        </div>
        
        <div class="cards-container">
            
            <!-- 1. Ambuluwawa Tower & Bio Diversity Complex -->
            <div class="card">
                <img src="images/ambuluwawa2.jfif" alt="Ambuluwawa Tower">
                <h3>Ambuluwawa Tower & Bio Diversity Complex</h3>
                <p><b>A unique multi-religious biodiversity complex featuring an iconic spiral tower offering panoramic views of the central highlands.</b></p>
                <p>Situated in Gampola at an elevation of 3,567 feet above sea level, Ambuluwawa is Sri Lanka's first multi-religious sanctuary and biodiversity complex. The highlights include a striking 48-meter tall white spiral tower that narrowingly ascends into the clouds, representing symbols of Buddhism, Hinduism, Islam, and Christianity. Surrounded by rich natural forests and mountain ranges, it offers breathtaking 360-degree views of Sri Pada, Hanthana, and Knuckles mountain ranges.</p>
                
                <!-- database connection -->
                <?php if (!empty($places['Ambuluwawa Tower & Bio Diversity Complex']['opening_hours'])): ?>
                    <p><strong>Opening Hours:</strong> <?php echo $places['Ambuluwawa Tower & Bio Diversity Complex']['opening_hours']; ?></p>
                <?php endif; ?>
                <?php if (!empty($places['Ambuluwawa Tower & Bio Diversity Complex']['ticket_price'])): ?>
                    <p><strong>Ticket Price:</strong> <?php echo $places['Ambuluwawa Tower & Bio Diversity Complex']['ticket_price']; ?></p>
                <?php endif; ?>
            </div>

            <!-- 2. Embekke Devalaya -->
            <div class="card">
                <img src="images/Embakka dewalaya1.jfif" alt="Embekke Devalaya">
                <h3>Embekke Devalaya</h3>
                <p><b>A masterpiece of ancient woodcarvings built during the Gampola Kingdom era dedicated to Lord Kataragama.</b></p>
                <p>Located in Udunuwara, Embekke Devalaya was built by King Vikramabahu III of the Gampola Kingdom in the 14th century. The shrine is world-famous for its remarkable wooden pillars in the 'Pitimadawa' (Palanquin Hall), decorated with intricate wood carvings of floral designs, mythical creatures, swans, dancers, and wrestlers. It stands as a testament to the supreme craftsmanship of traditional Sri Lankan wood artisans.</p>
                
                <p><strong>Opening Hours:</strong> Open Daily </p>
                <p><strong>Ticket Price:</strong> Free Entry</p>
            </div>

            <!-- 3. Gadaladeniya Viharaya -->
            <div class="card">
                <img src="images/gadaladeniya1.jfif" alt="Gadaladeniya Viharaya">
                <h3>Gadaladeniya Viharaya</h3>
                <p><b>An ancient rock Buddhist temple constructed completely out of sculpted stone in South Indian Dravidian architecture style.</b></p>
                <p>Gadaladeniya Rajamaha Viharaya, built upon a natural rock outcrop in Pilimathalawa in 1344 by King Bhuvanekabahu IV, features unique South Indian Dravidian architectural influences. Designed by a South Indian architect named Ganesvarachari, the main shrine room is constructed entirely of carved granite stone and houses a large seated Buddha statue in the Dhyana Mudra along with detailed wall murals.</p>

                <p><strong>Opening Hours:</strong> Open Daily </p>
               
            </div>

        </div>
    </main>

    <!-- Footer Section  -->
    <footer class="footer">
        <div class="footer-content">
            <ul class="footer-links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="nature.php">NATURE</a></li>
                <li><a href="religious.php">RELIGIOUS</a></li>
                <li><a href="cultural.php">CULTURAL</a></li>
                <li><a href="map.html">MAP</a></li>
            </ul>
            <div class="contact-col">
                <p><strong>CONTACT US</strong></p>
                <p>EMAIL</p>
                <p>PHONE &nbsp;&nbsp; 081 1234569</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 DayRoute. All rights reserved.</p>
        </div>
    </footer>

</body>
</html>

<?php
$conn->close();
?>
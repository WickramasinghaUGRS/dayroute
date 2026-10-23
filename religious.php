
<?php
// Check Session login (Protected Page)
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Please login first to access this page!'); window.location.href='login.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DayyRoute - Religious Places</title>
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
                    <li><a href="religious.php" style="color: #00bcd4;">RELIGIOUS</a></li>
                    <li><a href="cultural.php">CULTURAL</a></li>
                    <li><a href="map.html">MAP</a></li>
                </ul>
                <a href="logout.php" class="login-btn">LOGOUT</a>
            </div>
        </nav>
    </header>

    <!-- Main Content Section -->
    <main class="explore-section" style="min-height: 60vh;">
        <div class="explore-title">
            <h2>Religious Attractions</h2>
            <p>Explore the sacred religious places along our route.</p>
        </div>
        
        <div class="cards-container">
            
            <!-- 1. Mahaweli Maha Seya - Kotmale -->
            <div class="card">
                <img src="images/Mahaweli maha seya1.jfif" alt="Mahaweli Maha Seya">
                <h3>Mahaweli Maha Seya - Kotmale</h3>
                <p><b>A magnificent stupa built to commemorate the submerged temples and sacred places during the Mahaweli Development Programme.</b></p>
                <p>Located in Kotmale, the Mahaweli Maha Seya is a massive stupa standing at a height of 275 feet (84 meters), making it one of the largest stupas built in modern Sri Lankan history. Conceived by former minister Gamini Dissanayake, its construction began in 1983 to honor the religious sites submerged under the Kotmale Reservoir. The stupa features a unique hollow design where visitors can enter the inner chamber to pay homage to sacred relics and wall paintings depicting Buddhist history.</p>
                <p><strong>Opening Hours:</strong> Open Daily </p>
               
            </div>

            <!-- 2. Niyangampaya Rajamaha Viharaya -->
            <div class="card">
                <img src="images/niyamgampaya1.webp" alt="Niyangampaya Rajamaha Viharaya">
                <h3>Niyangampaya Rajamaha Viharaya</h3>
                <p><b>An ancient rock-cave temple dating back to the Gampola Kingdom era with rich architectural heritage.</b></p>
                <p>Niyangampaya Rajamaha Viharaya is a historic Buddhist temple situated near Gampola. Originating during the reign of King Bhuvanekabahu IV of the Gampola Kingdom in the 14th century, it is famous for its ancient stone carvings, wood carvings, and traditional Kandyan-style wall paintings. The temple houses a sacred shrine room built on stone pillars (Tampita Viharaya style elements) and serves as an important site preserving the religious art and history of the Central Province.</p>
                <p><strong>Opening Hours:</strong> Open Daily</p>
                
            </div>

            <!-- 3. Gatabe Rajamaha Viharaya -->
            <div class="card">
                <img src="images/GatambeTemple1.jpg" alt="Gatabe Rajamaha Viharaya">
                <h3>Gatabe Rajamaha Viharaya</h3>
                <p><b>A prominent hill-top Buddhist temple located along the Colombo-Kandy main road near Peradeniya.</b></p>
                <p>Perched on a small hill overlooking the Mahaweli River and the main Colombo-Kandy highway in Getambe, Gatabe Rajamaha Viharaya is one of the most widely visited temples in Kandy. The temple traces its roots back to the King Keerthi Sri Rajasinghe era of the Kandyan Kingdom. It is particularly renowned for its prominent Bodhi tree (Getambe Bodhiya) where devotees gather daily for worship, offering a serene atmosphere for prayer and spiritual reflection.</p>
                <p><strong>Opening Hours:</strong> Open Daily</p>
                
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
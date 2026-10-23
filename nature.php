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

// Fetch opening hours and ticket prices from database
$sql = "SELECT * FROM nature_places";
$result = $conn->query($sql);
$places = [];
if ($result->num_rows > 0) {
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
    <title>DayyRoute - Nature Attractions</title>
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
                    <li><a href="nature.php" style="color: #00bcd4;">NATURE</a></li>
                    <li><a href="religious.php">RELIGIOUS</a></li>
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
            <h2>Nature Attractions</h2>
            <p>Explore the beautiful nature places in our route.</p>
        </div>
        
        <div class="cards-container">
            
            <!-- 1. Kotmale Dam -->
            <div class="card">
                <img src="images/KothmaleDam1.jfif" alt="Kotmale Dam">
                <h3>Kotmale Dam</h3>
                <p><b>A massive and scenic dam located in Kotmale, offering breathtaking views and a calm atmosphere. It is one of five 
                    major headworks projects under the Accelerated Mahaweli Ganga scheme.</b></p>
                <p>Built across the Kotmale Oya in the Central Province, Kotmale Dam is a major hydro-power project commissioned in 1985 under the 
                    Accelerated Mahaweli Ganga scheme with financial assistance from Sweden. With a massive reservoir capacity of 174 million cubic meters and a 
                    201 MW power generation capacity, it is the most upstream headworks project of the Mahaweli scheme.
                    Set amidst picturesque up-country tea plantations and historical villages, the dam serves primarily for electricity generation while 
                    enhancing downstream irrigation water flow. Opening Hours: Closed to general public visitors (Operational hydroelectric facility managed by 
                    the Ceylon Electricity Board). </p>
                
                <?php if (!empty($places['Kotmale Dam']['opening_hours'])): ?>
                    <p><strong>Opening Hours:</strong> <?php echo $places['Kotmale Dam']['opening_hours']; ?></p>
                <?php endif; ?>
                <?php if (!empty($places['Kotmale Dam']['ticket_price'])): ?>
                    <p><strong>Ticket Price:</strong> <?php echo $places['Kotmale Dam']['ticket_price']; ?></p>
                <?php endif; ?>
            </div>

            <!-- 2. Kadiyanlena Ella Falls -->
            <div class="card">
                <img src="images/kadiyanlena1.jfif" alt="Kadiyanlena Ella Falls">
                <h3>Kadiyanlena Ella Falls</h3>
                <p><b>A beautiful waterfall known as the Broken Falls, descending in three distinct sections. It stands at 25 meters and is a great haven for photography enthusiasts.</b></p>
                <p>Also known as the 'Broken Falls,' Kadiyanlena Ella is a breathtaking 25-meter (82-foot) waterfall located near Nawalapitiya along the 
                    Talawakele road, straddling the boundary between the Nuwara Eliya and Kandy Districts. The waterfall earned its poetic name because 
                    it gracefully descends in three distinct sections—breaking into two at the top and one at the bottom. 
                    Renowned as a haven for photography enthusiasts, waterfall hunters, and nature lovers, it offers serene nature trails and crystal-clear freshwater pools. 
                    The ideal time to visit is from February to April to experience its full splendor. Visitors should note that the lower pool is around 100 feet deep 
                    and strictly off-limits for swimming, and caution is advised due to slippery, rugged terrain during the rainy season.</p>


                <?php if (!empty($places['Kadiyanlena Ella Falls']['opening_hours'])): ?>
                    <p><strong>Opening Hours:</strong> <?php echo $places['Kadiyanlena Ella Falls']['opening_hours']; ?></p>
                <?php endif; ?>
                <?php if (!empty($places['Kadiyanlena Ella Falls']['ticket_price'])): ?>
                    <p><strong>Ticket Price:</strong> <?php echo $places['Kadiyanlena Ella Falls']['ticket_price']; ?></p>
                <?php endif; ?>
            </div>

            <!-- 3. Galpoththa Ella Falls -->
            <div class="card">
                <img src="images/galpoththa2.jpg" alt="Galpoththa Ella Falls">
                <h3>Galpoththa Ella Falls</h3>
                <p><b>Also known as Heightenford Falls and Sudugala Falls, standing over 50 meters high with water sliding over a slanting rock bed in Nawalapitiya.</b></p>
                <p>Galpoththa Ella Falls is located in Nawalapitiya. It stands at a height which exceeds 50 meters and a width which exceeds 60 meters. It is also known 
                    as “Heightenford Falls” and “Sudugala Falls.” The water of this fall slides over a slanting rock bed.
                    The waterfall ends with a shallow pool about 2 feet deep and is a popular location for children to slide down the rock until they fall into the pool at the bottom.
                     However, this activity is possible only when the water levels are low and is quite risky.  </p>
                <?php if (!empty($places['Galpoththa Ella Falls']['opening_hours'])): ?>
                    <p><strong>Opening Hours:</strong> <?php echo $places['Galpoththa Ella Falls']['opening_hours']; ?></p>
                <?php endif; ?>
                <?php if (!empty($places['Galpoththa Ella Falls']['ticket_price'])): ?>
                    <p><strong>Ticket Price:</strong> <?php echo $places['Galpoththa Ella Falls']['ticket_price']; ?></p>
                <?php endif; ?>
            </div>

            <!-- 4. Peradeniya Botanical Garden -->
            <div class="card">
                <img src="images/peradeniya.jpg" alt="Peradeniya Botanical Garden">
                <h3>Peradeniya Botanical Garden</h3>
                <p><b>One of the finest botanical gardens in Asia, featuring over 4000 species of plants, famous for orchids, spices, and giant Javan fig trees.</b></p>
                <p>Located about 5.5 km west of Kandy near the Mahaweli River, the Royal Botanic Gardens of Peradeniya spans 147 acres at 460 meters above sea level. Its rich history dates back to 1371 under King Wickramabahu III, 
                    later serving as a royal garden in the 18th century before being established as a formal botanical garden in 1821 by Alexander Moon.
                    Recognized as one of the finest botanical gardens in Asia, it features over 4,000 species of plants, and is globally renowned for its 
                    magnificent orchid collection, spices, medicinal plants, and giant Javan fig trees. It also houses the National Herbarium of Sri Lanka and attracts millions of local and foreign visitors annually for its stunning
                     biodiversity and historical heritage. </p>


                <?php if (!empty($places['Peradeniya Botanical Garden']['opening_hours'])): ?>
                    <p><strong>Opening Hours:</strong> <?php echo $places['Peradeniya Botanical Garden']['opening_hours']; ?></p>
                <?php endif; ?>
                <?php if (!empty($places['Peradeniya Botanical Garden']['ticket_price'])): ?>
                    <p><strong>Ticket Price:</strong> <?php echo $places['Peradeniya Botanical Garden']['ticket_price']; ?></p>
                <?php endif; ?>
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
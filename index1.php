<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta property="og:image" content="https://aseries.scec.tech/modern.jpg" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <title>A-series-Homes</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body{
      align-items: center;
    }
  </style>
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body>
  <div class="loader">
    <div class="circle"></div>
  </div>
  <div class="root" style="display: none;">
    <header>
      <div class="nav">
        <nav>
          <div class="logo"><img src="img/logo.png" alt="" /></div>
          <ul id="menu-ct">
            <li><a href="#">Home</a></li>
            <li><a href="apartments.html">Apartments</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <img class="menu" id="menu" src="menu.png" alt="" width="40px" />
        </nav>
      </div>
      <div class="hero">
        <div class="info">
          <h1>Find Your Perfect <br /><span id="changingText">Rental</span> Space</h1>
          <p>
            Discover your dream space at Aseries Homes. Explore a variety of
            rental options just a click away
          </p>
          <form action="">
            <input type="search" placeholder="search by location" />
            <input type="submit" value="search" />
          </form>
        </div>
        <div class="img">
          <img src="modern.jpg" alt="" />
        </div>
      </div>
    </header>
    <section class="cities">
      <p>Naalya</p>
      <p>Bugoloobi</p>
      <p>kira</p>
      <p>kyaanjya</p>
      <p>muyenga</p>
    </section>
    <section class="catalog" id="apt">
      <h2>Featured Apartments</h2>
      <div class="catalog products">

      <?php

      include "pr.php";
// Check connection
// SQL query to select everything from the 'apartments' table
$sql = "SELECT * FROM apartments";

$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch the data as an associative array
    while ($row = $result->fetch_assoc()) {
      // Output the card with dynamic content from the database
      echo '<div data-aos="zoom-in" class="card">';
      echo '<div class="img slider">';
      echo '<img src="uploads/images/' .($row['image']) . '" alt="" />';
      echo '</div>';
      echo '<div class="room_id">';
      echo '<p class="hide">' . $row['id'] .'</p>';
      echo '<h3>' . $row['title'] .', '. $row['location'] . '</h3>';
      echo '<p>' . $row['bedroom'] . '<img height="20" width="20" src="img/bdrm.svg" alt=""> &#160 ' . $row['tv'] . '<img height="20" width="20" src="img/tv.svg" alt=""> &#160 ' . $row['bathroom'] . '<img height="20" width="20" src="img/bthrm.svg" alt=""></p>';
      echo '<p><b> $ ' . number_format($row['price']) . '</b> / night</p>';
      echo '</div>';
      echo '</div>';
  }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
// Close the connection when done
$conn->close();
?>
<!-------------------------Dont delete--------------------------------------------------------------------->
        <!-- <div data-aos="zoom-in" class="card">
          <div class="img slider">
            <div id="btn1">
              <img src="img/next.png" alt="">
            </div>
            <div id="btn2">
              <img src="img/next.png" alt="">
            </div>
            <ul id="c-slider">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>
          <h3>Luxury Villa, Kampala</h3>
          <p>4 <img height="20" width="20" src="img/bdrm.svg" alt=""> &#160 1 <img height="20" width="20"
              src="img/tv.svg" alt=""> &#160 2<img height="20" width="20" src="img/bthrm.svg" alt=""></p>
          <p>Ugx.150,000 / night</p>
        </div> -->
        <!------------------------------------------------->
        <!------------------------------------------------->
      </div>
      <button data-aos="fade-up" onclick='link("apartments.html")'>show more</button>
    </section>
    <section class="directions">
      <h2>It's Qick. All Online. 100% Safe.</h2>
      <div class="dir">
        <div class="d">
          <h3>1</h3>
          <h4>Pick A Place</h4>
          <p>
            Explore our high-quality rooms and apartments. Save favorites. Get
            alerts. Finding your dream home could not be easier.
          </p>
        </div>
        <div class="d">
          <h3>2</h3>
          <h4>Send A Message</h4>
          <p>
            Enjoy an online, private space for all conversations with Us. Ask
            questions, share information, and see how we match.
          </p>
        </div>
        <div class="d">
          <h3>3</h3>
          <h4>Send A Booking Request</h4>
          <p>
            Like a place and want to call it home? Send us a booking request.
            You’ll know if it’s accepted or not within 12 hours.
          </p>
        </div>
        <div class="d">
          <h3>4</h3>
          <h4>Pay And Its Yours</h4>
          <p>
            Pay the first month’s rent to confirm your booking.
            Congratulations, you found your next home. We’ll protect your
            money until you’ve moved in and checked the place out.
          </p>
        </div>
      </div>
    </section>
    <section class="contact" id="contact">
      <h2>Contact Us</h2>
      <p>For any inquiries, feel free to reach out to us.</p>
      <form action="">
        <input type="email" name="" id="" placeholder="email address" />
        <input type="submit" value="submit" />
      </form>
      <p>
        For more information, contact our real estate agents at (123) 456-7890
        or email us at info@aserieshomes.com
      </p>
      <div class="social">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-instagram"></a>
      </div>
    </section>
    <footer>
      <p>© ASeriesHomes Inc. All rights reserved.</p>
      <ul>
        <li>Terms of service</li>
        <li>privacy policy</li>
      </ul>
    </footer>
  </div>
  <script src="jquery.js"></script>
  <script src="script.js"></script>
  <script>
    AOS.init();
  </script>
  <script>
    
  </script>
</body>

</html>
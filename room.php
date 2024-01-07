<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Room</title>
    <link rel="stylesheet" href="style.css" />
    <style>
      body {
        color: #2e2e2e;
        background-color: white;
      }
      .root {
        background-color: white;
      }
      .nav {
        border-bottom: 1.5px solid #a88e25;
      }
      main {
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 90%;
        margin-bottom: 10%;
      }
      .cont-pay {
        width: 98%;
        justify-content: space-between;
        display: flex;
        height: fit-content;
      }
      .cont-pay .payment {
        width: 38%;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 8px;
        box-shadow: 1px 1px 6px rgba(0, 0, 0, 0.473);
        height: fit-content;
        background-color: white;
      }
      .payment input,
      .payment textarea {
        width: 90%;
        margin: 5px 0;
        padding: 3px 10px;
        font-size: 1.1rem;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, 0.342);
      }
      .payment .btns {
        width: 100%;
        display: flex;
        justify-content: space-between;
      }
      .payment .btns button {
        text-wrap: nowrap;
      }
      .payment .card {
        width: 85%;
        display: flex;
        justify-content: srgb(190, 17, 17) between;
        height: 100%;
        padding: 10px 0;
      }
      .payment .card input {
        height: 30px;
        width: 60%;
      }
      .payment .card p {
        font-size: 1.1rem;
        width: 100%;
      }
      .cont-pay .content {
        width: 60%;
      }
      hr {
        width: 100%;
        margin: 20px 0;
      }
      .content h2 {
        margin: 5px 0;
      }
      .content p {
        font-size: 1rem;
        margin: 0;
      }
      .content .description {
        margin-top: 3%;
        width: 100%;
      }
      .g-flex {
        display: flex;
        gap: 3%;
        justify-content: center;
        width: 100%;
        justify-content: space-between;
        margin-top: 45px;
        padding: 10px 0;
        max-height: 350px;
      }
      .g-flex * {
        margin: 0;
      }
      .g-main {
        width: 50%;
      }
      .g-main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius:5px;
        object-position: center;
      }
      .g-second {
        width: 50%;
        display: flex;
        gap: 2%;
        position: relative;
        flex-wrap: wrap;
      }
      .g-second img {
        aspect-ratio: 4/2.8;
        border-radius:5px;
        width: 48%;
        height: 49%;
        object-fit: cover;
        position: relative;
      }
      .landlord {
        display: flex;
        align-items: center;
        gap: 20px;
      }
      .landlord img {
        width: 50px;
        aspect-ratio: 1/1;
        border-radius: 50%;
      }
      .landlord h3 {
        margin: 3px 0;
      }
      .whtf {
        margin-top: 4%;
        width: 100%;
      }
      .whtf h2 {
        margin: 0;
      }
      @media (max-width: 650px) {
        .g-flex {
          width: 100%;
          flex-direction: column;
          max-height: fit-content;
          align-items: center;
          justify-content: center;
        }
        .g-flex div {
          width: 100%;
          max-height: 350px;
          height: 100%;
        }
        .g-second {
          align-items: center;
          justify-content: center;
        }
        .g-second img {
          height: 48%;
          margin-bottom: 10px;
        }
        .cont-pay {
          flex-direction: column;
        }
        .cont-pay .payment,
        .cont-pay .content {
          width: 100%;
        }
        .cont-pay .payment {
          margin: 20px 0;
          min-height: 200px;
        }
      }
      .g-flex * {
        transition: all 0.2s ease-in-out;
      }
      .g-flex img:hover {
        cursor: pointer;
        filter: brightness(60%);
        scale: 1.03;
      }
      #fullpage {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-size: contain;
        background-repeat: no-repeat no-repeat;
        background-position: center center;
        background-color: rgba(255, 255, 255, 0.64);
      }
    </style>
  </head>
  <body>
    <?php $room_id = $_GET['id'];
    include 'pr.php';
    $sql = "SELECT * FROM apartments where id='$room_id' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $landlord =$row['landlord'];
    $sql2 = "SELECT * FROM landlord where id='$landlord' ";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $images = explode(',', $row['images']);
    // foreach ($images as $path) {
    //     echo '<img src="uploads/images/' . trim($path) . '" alt="Image">';
    // }
    ?>
    <div class="root">
      <header>
        <div class="nav">
          <nav>
            <div class="logo"><img src="img/logo.png" alt="" /></div>
            <ul id="menu-ct">
              <li><a href="index1.php">Home</a></li>
              <li><a href="apartments.html">Apartments</a></li>
              <li><a href="">Blog</a></li>
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
            <img class="menu" id="menu" src="menu.png" alt="" width="40px" />
          </nav>
        </div>
      </header>
      <main>
        <div class="g-flex">
          <div class="g-main">
            <img src="uploads/images/<?php echo $images[0] ?>" alt="" />
          </div>
          <div class="g-second">
            <img src="uploads/images/<?php echo $images[1] ?>" alt="" />
            <img src="uploads/images/<?php echo $images[2] ?>" alt="" />
            <img src="uploads/images/<?php echo $images[3] ?>" alt="" />
            <img src="uploads/images/<?php echo $images[4] ?>" alt="" />
          </div>
        </div>
        <div class="cont-pay">
          <div class="content">
            <?php echo '<h2>' .$row['title'] .', '. $row['location'] . '</h2>';?>
            <p><?php echo $row['bedroom'] ?> Bedroom . <?php echo $row['bathroom'] ?> Bathroom . <?php echo $row['living'] ?> livingroom</p>
            <div class="description">
              <h2>Description</h2>
              <p>
              <?php echo $row['description'] ?>
              </p>
            </div>
            <hr />
            <div class="landlord">
              <?php echo '<img class="dp" src="uploads/images/' .($row2['image']) . '" alt="' .($row2['name']) . '" />';?>
              <div class="l-info">
                <h3><?php echo $row2['name'] ?></h3>
                <p>landlord</p>
              </div>
            </div>
          </div>
          <div class="payment">
            <div class="card">
              <p><b>$<?php echo $row['price'] ?> </b>&nbsp Day</p>
              <input type="tel" placeholder="tel: +256 71234568" />
              <textarea
                name=""
                id=""
                cols="20"
                rows="5"
                placeholder="Booking message"
              ></textarea>
              <div class="btns">
                <button>Contact</button>
                <button>Send booking</button>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div id="fullpage" onclick="this.style.display='none';"></div>
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
      function getPics() {} //just for this demo
      const imgs = document.querySelectorAll(".g-flex img");
      const fullPage = document.querySelector("#fullpage");

      imgs.forEach((img) => {
        img.addEventListener("click", function () {
          fullPage.style.backgroundImage = "url(" + img.src + ")";
          fullPage.style.display = "block";
        });
      });
    </script>
  </body>
</html>
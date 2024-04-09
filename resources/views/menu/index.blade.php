<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Posts</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>
    <div class="promo-top">
        <div class="promo1">
            <h1 class="promo-text">Voor 23:45 besteld morgen in huis</h1>
        </div>
        <div class="promo2">
            <h1 class="promo-text">Achteraf betalen met klarna</h1>
        </div>
        <div class="promo3">
            <h1 class="promo-text">100% Hoogwaardige ingredienten</h1>
        </div>
        <div class="promo4">
            <h1 class="promo-text">Bestellingen van €30+ gratis verzending</h1>
        </div>
        <div class="button-container">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        </div>
    </div>
        <img src="media/sam-sulek.png" class="main-image">
        <div class="image-overlay">
            <div class="groeicafe-text-container">
                <h1 class="groeicafe-text">HET GROEICAFE</h1>
            </div>
            <div class="containers-container">
                <div class="container-links">
                    <h1 class="nieuw-bij-text">NIEUW BIJ GROEICAFE</h1>
                    <h1 class="studentenpakketten-text">STUDENTENPAKKETTEN</h1>
                    <h1 class="zorgvuldig-text">Zorgvuldig samengestelde pakketten passend voor iedere doelstelling.</h1>
                    <a class="shop-nu-button">SHOP NU ALLE PAKKETEN</a>
                </div>
                <div class="container-rechts">
                <div id="id01" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
         <div class="imgcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="/media/img_avatar2.png" alt="Avatar" class="avatar">
         </div>

      <div class="container">
         <label for="uname"><b>Username</b></label>
         <input type="text" placeholder="Enter Username" name="uname" required>

         <label for="psw"><b>Password</b></label>
         <input type="password" placeholder="Enter Password" name="psw" required>

         <button type="submit">Login</button>
         <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
          </label>
      </div>

      <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      </div>
    </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
   modal.style.display = "none";
}
    }
    </script>
                </div>
            </div>
        </div>
    <div class="footer-gold-bar">

    </div>
</body>
</html>

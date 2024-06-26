<?php include 'form-handler.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lender</title>
    <link rel="stylesheet" href="contact.css">
</head>
<body>
    <header>
        <div class="nav">
            <div class="logo">
                <img src="bg2.jpg" alt="image">
            </div>
            <div class="nav-li navliresp">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                    <li><a href="About.html">About us</a></li>
                    <li><a href="login.html">Login</a></li>
                </ul>
            </div>
            <div class="burger" id="burger">
                <img src="menu.png" alt="" id="togglebtn">
            </div>
        </div>
    </header>
    <main>
        <div class="main">
            <div class="title">
                LENDER
            </div>
            <div class="login-form-wrap">
                <h1>Contact Us</h1>
                <form method="POST" id="form">
                    <label for="name">Your Name</label>
                    <input type="text" name="name">
                    <label for="Phone">Phone Number</label>
                    <input type="number" name="phone">
                    <label for="Email"> E-mail Id</label>
                    <input type="email" name="email">
                    <label for="Enquire"> Entre your Enquire Here !</label>
                    <input type="text" name="enquerry">
                    <label for="btn">Submit</label>
                    <input type="button" name="submit" value="Submit" id="Submit-btn" onclick="SubmitEvent">
                </form>
            </div>
        </div>
    </main>
    <footer>
        <hr style="border: 0.5px solid black;">
        <div class="footer">
            <h3 style="text-align: center;">@Copy-Right-Reserved</h3>
        </div>
    </footer>
    <script src="index.js"></script>
</body>
</html>


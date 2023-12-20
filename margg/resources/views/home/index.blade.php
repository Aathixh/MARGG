<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet href="css/homestyles.css">
    <title>MARGG</title>
</head>

<body>
    <div class="content">
        <header class="top-bar">
            <nav><a href="#about">ABOUT</a></nav>
            <form>
                <label for="lang">Language:</label>
                <select name="cars" id="cars">
                    <option value="volvo">English</option>
                    <option value="saab">Hindi</option>
                    <option value="opel">Tamil</option>
                    <option value="audi">Malayalam</option>
                </select>
            </form>
        </header>
        <div class="head">
            <img src="img/black.png" alt="logo">
            <div class="container">
                <button onclick="window.location.href='/login'"><span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front text">Register
                    </span></button>
                <button onclick="window.location.href='/signin'"><span class="shadow"></span>
                    <span class="edge"></span>
                    <span class="front text">Login
                    </span></span></button>
            </div>
        </div>
        <footer id="about">
            <h3>ABOUT</h3>
            <hr>
            <p>"MARGG" is a startup idea focused on revolutionizing the way people track buses and enhance public
                transportation systems. <br>Here's a brief overview of what MARGG could offer:

                <br>Concept: MARGG is a comprehensive bus tracking and management system designed to provide real-time
                information to both passengers and transportation authorities.
            </p>
        </footer>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <h3><a href="index.html">SuRyAnSh</a></h3>
            <div class="nav-links">
                <ul>
                    <li><a href="features.php">FETAURES</a></li>
                    <li><a href="about.php">ABOUT US</a></li>
                </ul>
            </div>
        </nav>
        <h1>Contact Us</h1>
    </section>
    <!-- Contact Us -->
    <section class="contact-us">
        <form action="">
            <input type="text" placeholder="Enter your name" required>
            <input type="email" placeholder="Enter email address" required>
            <input type="text" placeholder="Enter your subject" required>
            <textarea rows="8" placeholder="Message" required></textarea>
            <button type="submit" class="hero-btn red-btn" onclick="alert('Message sent successfully')">Send Message</button>
        </form>
    </section>

    <!--------Footer-------->
    <section class="footer">
        <h4>About Us</h4>
        <p>
            We are here to provide ideas for a better user interface.
        </p>
    </section>
</body>

</html>
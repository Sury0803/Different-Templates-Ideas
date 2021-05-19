<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section class="sub-header">
        <nav>
            <h3><a href="index.html">SuRyAnSh</a></h3>
            <div class="nav-links">
                <ul>
                    <li><a href="features.php">FEATURES</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </div>
        </nav>
        <h1>FORMS</h1>
    </section>
    <section class="cards">
        <h1>Designs For Forms</h1>
        <p>We have awesome and stylish forms for payments, sing up, log in, contact, etc.</p>


        <!-- -----------------Responsive Forms------------------------- -->

        <section class="rep-form">
            <div class="imgr">
                <img src="img/icons8-team-7LNatQYMzm4-unsplash.jpg">
            </div>
            <div class="rcontent">
                <div class="formr">
                    <h2>Login</h2>
                    <form>
                        <div class="inputr">
                            <span>Username</span>
                            <input type="text">
                        </div>
                        <div class="inputr">
                            <span>Password</span>
                            <input type="password">
                        </div>
                        <div class="remember">
                            <label><input type="checkbox">Remember me</label>
                        </div>
                        <div class="inputr">
                            <input type="submit" value="Sign in">
                        </div>
                        <div class="inputr">
                            <p>Don't have an account? <a href="#">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <!-- ----------------------double form-------------------------- -->

        <section class="dbform">
            <main>
                <div class="dbcont">
                    <div class="user signIn">
                        <div class="imgd"><img src="img/katie-moum-l0GRQpXwgPk-unsplash.jpg"></div>
                        <div class="dform">
                            <form>
                                <h2>Sign In</h2>
                                <input type="text" placeholder=" Username">
                                <input type="password" placeholder=" Password">
                                <input type="submit" value="Login">
                                <p class="signup">Don't have an account ? <a href="#" onclick="toggleForm();">Sign Up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </section>
    
    <!-- ------------------Contact form------------------------ -->

    <section class="contac">
        <div class="ccont">
            <div class="cform">
                <form>
                    <h2>Contact Us</h2>
                    <div class="inputbox">
                        <input type="text" required="required">
                        <span>Full Name</span>
                    </div>
                    <div class="inputbox">
                        <input type="email" required="required">
                        <span>Email Address</span>
                    </div>
                    <div class="inputbox">
                        <textarea required="required"></textarea>
                        <span>Type Your Message Here...</span>
                    </div>
                    <div class="inputbox">
                        <input type="submit" value="Send">
                    </div>
                </form>
            </div>
            <div class="imgc">
                <img src="img/jacek-dylag-jo8C9bt3uo8-unsplash.jpg">
            </div>
        </div>
    </section>

    <!-- ----------------------payment form--------------------------- -->
    
    <section class="payform">
        <div class="paycontainer">
            <form action="">
                <h1 class="main_heading">Payment Form</h1>
                <hr>
                <h2>User Information</h2>
                <p>Name: * <input type="text" name="name" placeholder="Full Name" required></p>
                <fieldset>
                    <legend>Gender*</legend>
                    <p>
                        Male<input type="radio" name="gender" id="male" required>
                        Female<input type="radio" name="gender" id="female" required>
                    </p>
                </fieldset>
                <p>Address: <textarea name="address" id="address" cols="100" rows="8"
                        placeholder="Enter Your Address"></textarea></p>
                <p>Email: *<input type="email" name="email" id="email" placeholder="example@gmail.com" required></p>
                <p>Pincode: *<input type="number" name="pincode" id="pincode" placeholder="123456" required></p>
                <h2>Payment Information</h2>
                <p>Card Type: *
                    <select name="card_type" id="card_type" required>
                        <option value="">--Select a card type--</option>
                        <option value="visa">Visa</option>
                        <option value="rupay">Rupay</option>
                        <option value="mastercard">MasterCard</option>
                    </select>
                </p>
                <p>
                    Card Number *<input type="number" name="card_number" id="card_number" placeholder="1111-2222-3333-4444"
                        required>
                </p>
                <p>
                    Expiration Date: *<input type="date" name="exp_date" id="exp_date" required>
                </p>
                <p>CVV: *<input type="password" name="cvv" id="cvv" placeholder="123" required></p>
                <input type="submit" value="Pay Now">
            </form>
        </div>
    </section>


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
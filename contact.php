<html>
    <head>
        <title>Athletic Wear for College Students</title>
        <meta name="description" content="Hello fellow college peers! The website you entered is simply all about trendy yet affordable athletic gear. You’ve been granted access to receive great insight into all of these amazing garments and why you are making a great investment. I will be showing you all of these wonderful products and how each of them best fits your needs. Enjoy!">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <header>
                <div class="main">
                    <div class="leftsec">
                        <img src="images/logo.png" class="logo" alt="logo" />
                    </div>
                    <div class="rightsec">
                        <nav class="mainmenu">
                            <ul>
                                <li><a  href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="products.html">Products</a></li>
                                <li><a  class="active"  href="contact.php">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            <div id="google_translate_element"></div><script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script><script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
            <?php
            $msg = '';
            if (isset($_POST['submit'])) {
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $comments = $_POST['comments'];
                if ($name == '') {
                    ?>
                    <script>
                        $('#name_error').empty('');
                        $('#name_error').append('Please enter correct name.');
                    </script>
                    <?php
                } else if ($mail == '') {
                    ?>
                    <script>
                        $('#mail_error').empty('');
                        $('#mail_error').append('Please enter correct email address.');
                    </script>
                    <?php
                } else if ($comments == '') {
                    ?>
                    <script>
                        $('#comment_error').empty('');
                        $('#comment_error').append('Please enter comments.');
                    </script>
                    <?php
                } else {
                    $message = '
						Name:' . $name . '
						Email:' . $mail . '
						Comments:' . $comments . '
					';
                    mail('edklein@gmail.com', 'Improvement', $message);
                    $msg = "Thank you for contacting us.";
                }
            }
            ?>
            <div class="main_content">
                <div>
                    <h1>Important Business</h1>
                </div>
                <div class="main">
                    <div class="leftsec">
                        <h2>Contact Us</h2>
                        <div>Personal Email: <a href="mailto:patm@gmail.com">patm@gmail.com</a></div>	
                        <div class="mt1">Business Email: <a href="mailto:AWCS@gmail.com">AWCS@gmail.com</a></div>	
                    </div>
                    <div class="rightsec">
                        <h2>Tell us what we can improve on</h2>
                        <form method="post" action="#">
                            <div class="mt1">
                                <input type="text" name="name" placeholder="Name" class="feild" />
                                <div id="name_error" class="error"></div>
                            </div>
                            <div class="mt1">
                                <input type="email" name="mail" placeholder="Email" class="feild" />
                                <div id="mail_error" class="error"></div>
                            </div>
                            <div class="mt1">
                                <textarea  name="comments" placeholder="Comments" class="textfeild" ></textarea>
                                <div id="comment_error" class="error"></div>
                            </div>
                            <div class="mt1">
                                <input type="submit"  name="submit" value="Submit" class="btn" ></textarea>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <footer>
                <p  class="center">This website is protected by U.S copyright laws. All reproduction and distribution of the website without consent from the owner is strictly prohibited.</p>
                <p class="center">&copy; 2017 Athletic Wear for College Students</p>
            </footer>
        </div>
    </body>
</html>
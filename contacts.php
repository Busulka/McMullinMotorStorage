
<?php include_once 'contactConfig/sendmail.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us</title>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="https://kit.fontawesome.com/2436301015.js" crossorigin="anonymous"></script>
    <title>Contact Us</title>

    <!-- reCAPTCHA -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<?php
include "templates/header.php";
include "templates/menu.php";
?>
<div class="main container">
    <div class="main__left">
        <h1>Contact Us</h1>
        <div class="contact-details">
        <address class="address">
            <div class="contact-address">
                    <p>McMullin Motor Storage</p>
                    <p>Quarry Road Depot, Yealmbridge</p>
                    <p>Plymouth</p>
                    <p>Devon</p>
                    <p>PL8 2EG</p>
                    <p>Telephone: 01752 402020</p>
                </div>
                <div class="contact-img">
                    <img src="img/contact.jpg">
                </div>

        </address>
        <div class="contact-form">
        <h2>Contact Form</h2>
            <?php if(!empty($statusMsg)){ ?>
                <div class="status-msg <?php echo $status; ?>"><?php echo $statusMsg; ?></div>
            <?php } ?>
            <form action="" method="post" class="form">
                <!-- Form fields -->
                <div class="form-input">
                    <label for="name">Name</label>
                    <input type="text" name="name" placeholder="Enter your name" value="<?php echo !empty($postData['name'])?$postData['name']:''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Enter your email" value="<?php echo !empty($postData['email'])?$postData['email']:''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" placeholder="Enter subject" value="<?php echo !empty($postData['subject'])?$postData['subject']:''; ?>" required>
                </div>
                <div class="form-input">
                    <label for="message">Message</label>
                    <textarea name="message" placeholder="Type your message here" required><?php echo !empty($postData['message'])?$postData['message']:''; ?></textarea>
                </div>
                <div class="form-input">
                    <!-- Google reCAPTCHA box -->
                    <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                </div>
                <input type="submit" name="submit" class="send-btn" value="Submit">
            </form>
        </div>
                </div>
    </div>


    <?php
    include "templates/sidebar.php"
    ?>
</div>

<?php
include "templates/footer.php";
?>
<script src="js/menu.js"></script>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AskMe | OuNime</title>
    <link rel="stylesheet" href="styleask.css">
</head>
<body>  
<!-- /*  --------------------- FORM ASK ME --------------------- */  -->
    <div class="container">  
        <form id="contact" action="ask.php" method="post">
            <h3>OuNime Contact Form</h3>
            <h4>Ask me for anime update</h4>
            <fieldset>
                <input placeholder="Your name" type="text" name="name" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" name="email" required>
            </fieldset>
            <fieldset>
                <input placeholder="Your Phone Number (optional)" type="tel" name="nohp" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your message here...." name="ask" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Kirim</button>
            </fieldset>
            <p class="copyright">Designed by <a href="index.php" target="_blank" title="Colorlib">OuNIme</a></p>
        </form>
    </div>
    <div class="container">
    </div>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/css/style.css">

    <title>Contact</title>
</head>
<body>
<div>
    <h2>Contact us </h2>
</div>

<div class="container">
<h3>Want to reach out ? Just fill the form below, we will get back to you.</h3>
    <form method="post" action=index.php>
        <div class="row">
            <div class ="col-25">
                <label for="fname">Firstname</label>
            </div>
            <div class="col-75">
                <input type="text" name=name" placeholder="John" required ><br>
            </div>
            <div class = "col-25">
                <label for="lname">Lastname</label>
            </div>
            <div class="col-75">
                <input type="text" id="lname" name="lastname" placeholder="Doe" required><br>
            </div>
            <div class = "col-25">
                <label>Your email</label>
            </div>
            <div class="col-75">
                <input type="email" name="email" placeholder="example@email.com" required><br>
             </div>
            <div class = "col-25">
                <label>Message</label>
            </div>
         <div class="col-75">
                <textarea name="message" placeholder="Type here..." required></textarea><br>
            </div>

            <input type="submit" value="Contact us">
        </div>
    </form>
</div>
</body>
</html>
<?php

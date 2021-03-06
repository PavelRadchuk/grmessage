<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Style sheets-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <link type="text/css" rel="stylesheet" href="/355/grmessage/styles/main.css">
        <link type="text/css" rel="stylesheet" href="/355/grmessage/styles/profile.css">

        <!-- Javascript-->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="/355/grmessage/javascript/updateStudentInfo.js"></script>
    </head>
    <body>
        <header class="header clearfix" id="mainHeader">
            <a href="profile"><h1>Green River Messaging</h1></a>
            <a href="logout"><h1 id="logout">Log out</h1></a>
        </header>

        <div class="container" id="mainContainer">

            <h1>Messages</h1>
            <a href="../grmessage/profile">
                <button id="goHome" type="button" name="goHome">Return to Home</button>
            </a>
            <hr>

            <?php foreach (($messages?:[]) as $messages): ?>
                <p><strong>Sent By: </strong><?= ($messages['instructorEmail']) ?> </p><br>
                <p><strong>Message: </strong><?= ($messages['content']) ?> </p><br>
                <p><strong>Date: </strong><?= ($messages['datetime']) ?> </p><br>
                <hr>
            <?php endforeach; ?>

        </div>
    </body>
</html>
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
            <a href="logout"><h1 id="logout">Logout</h1></a>
        </header>

        <div class="container" id="mainContainer">
            <h2 id="regHeader">Welcome, <?= ($fname) ?></h2>
            <hr>
            <div class="col-10">
                <form class="form" action="" method="post">

                    <div id="instructorFields">

                        <?php if (isset($errors['name'])): ?>
                            <p class="error alert alert-danger"><?= ($errors['name']) ?></p>
                        <?php endif; ?>
                        <label><strong>Full Name: </strong><span id="nameSpan"><?= ($fname) ?> <?= ($lname) ?> </span>
                            <input class='form-control sameLine' type='text' name='newFName' id='newFName' value="<?= ($fname) ?>">
                            <input class='form-control sameLine' type='text' name='newLName' id='newLName' value="<?= ($lname) ?>">
                            <button class='update' type="submit" id='updateName' name="updateName">Update Info</button>
                            <button class="edit" type="button" id="editName"></button>
                            <button type="button" class="cancelInput" id="cancelName" name="cancelName">Cancel</button></label>

                        <label><strong>Instructor Email: </strong><span> <?= ($email) ?> </span></label><br>

                        <button type="button" id="changePassword" name="changePassword">Change Password</button><br>

                        <div id="password"></div>

                        <a href="../grmessage/message">
                            <button id="sendMessage" type="button" name="sendMessage">Send Message</button>
                        </a>

                        <a href="../grmessage/view-messages">
                            <button id="viewMessages" type="button" name="viewMessages">View Messages</button>
                        </a>
                    </div>
                </form>
            </div>
        </div> <!-- /container -->

    </body>
</html>
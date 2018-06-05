<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Verify Account</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--Style sheets-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/355/grmessage/styles/main.css">
    <link type="text/css" rel="stylesheet" href="/355/grmessage/styles/accountVerification.css">
</head>
<body>
<div class="container">
    <p class="alert alert-warning text-dark my-3" role="alert">
        Please enter the verification code you received in your Green River email.
    </p>
    <form method="post" class="form mx-auto">
        <div class="container">
            <div class="row mx-auto">
                <?php if ($emailError): ?>
                    <p class="alert alert-danger text-dark my-3" role="alert">
                        Invalid email.
                    </p>
                <?php endif; ?>
                <label class="form-control-label mx-auto" for="email">Green River Email </label>
                <input class="form-control" type="text" id="email" name="email" value="<?= ($email) ?>">
            </div>
            <div class="row mx-auto">
                <?php if ($codeError): ?>
                    <p class="alert alert-danger text-dark my-3" role="alert">
                        Invalid verification code.
                    </p>
                <?php endif; ?>
                <label class="form-control-label mx-auto" for="verificationCode">Verification Code </label>
                <input class="form-control" type="text" id="verificationCode" name="verificationCode">
            </div>
            <div class="row align-bottom mx-auto my-2">
                <button type="submit" name="verify">Verify Account</button>
                <button type="submit" name="resend" id="resend">Resend verification code</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
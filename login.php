<!doctype html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>ToDo</title>
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Anfang Wrapper -->
<div class="login_wrap">
    <!-- Anfang Content -->
    <div class="login_content">
        <!-- Logo -->
        <img src="images/ToDo.png" class="login-logo">
        <!-- Anfang Main-->
        <div class="login_main">
            <!-- Anfang Main_Full -->
            <div class="login_main_full">
                <form action="includes/authorized.php" method="post" accept-charset="utf-8">
                    <label for="identity">e-Mail:</label>
                    <input type="text" name="identity" value="" class="text" id="identity"  />
                    <label for="password">Kennwort:</label>
                    <input type="password" name="password" value="" class="text" id="password"  />
                    <input type="submit" value="Login" class="button ok" />
                    <!--<a href="javascript:document.submitForm.submit()" class="button ok"><strong>Login</strong></a>-->
                    <a href="reset_password.php" class="button forgott_password"><strong>Ihr Kennwort vergessen?</strong></a>
                </form>
            </div>
            <!-- Ende Main_Full -->
        </div>
        <!-- Ende Main -->
    </div>
    <!-- Ende Content -->
</div>
<!-- Ende Wrapper -->
</body>
</html>
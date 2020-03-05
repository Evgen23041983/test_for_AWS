<!DOCTYPE html >

<html lang="en">
	<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	</head>
<body>
    <div style="color: red; font-size: 14px; padding: 20px; margin: 0 auto; display: block; width:400px;">
        <?php if (isset($errors) && is_array($errors)): ?>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li> - <?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

    <form action="" method="post" class="form-login" style="display: block; width: 400px; margin: 0 auto;  padding: 20px; text-align: center;">
        <h2><center>Sign Up</h2></center><br>
        <input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/><br><br>
        <input type="text" name="login" placeholder="login" value="<?php echo $login; ?>"/><br><br>
        <input type="password" name="password" placeholder="password" value="<?php echo $_POST['password']; ?>"/><br><br>
        <div class="os"></div>
        <input type="submit" name="submit" class="btn btn-default"  value="Sig up" />
        <div class="os"></div>
        <div>
            <a href="/">Back</a>
        </div>
    </form>




    
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<?php //include_once('./partials/head.php'); ?>

<head>
    <meta name="robots" content="noindex, nofollow">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Meal Picker</title>
    <meta name="description" content="Meal Picker App">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/scripts.js"></script>
    <!-- <link rel="shortcut icon" href="favicon.ico"> -->
</head>

<body class="home">

    <?php include_once('./partials/header.php'); ?>

    <main class="main" role="main">
        <h2 class="block__subheading">Sign In</h2>
        <form id="sign-in-form" class="form" role="form">
            <div class="form__input">
                <label class="label" for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Email" />
            </div>
            <div class="form__input">
                <label class="label" for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" />
            </div>
            <div class="helper__text">
                <a href="./password/">Forgot username<br />or password?</a>
            </div>
            <div class="form__input">
                <label class="label" for="sign-in">Sign In</label>
                <button id="sign-in" class="button orange-light" type="button"><a href="./nutrition/">Sign In</a></button>
            </div>
        </form>
        <aside class="create__profile">
            <div class="helper__text">
                <p>New to Meal Picker?</p>
            </div>
            <label class="label" for="create-profile">Create Profile</label>
            <button id="create-profile" class="button orange-dark"><a href="./register/">Create Profile</a></button>
        </aside>
    </main>
</body>

</html>

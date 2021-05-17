<!DOCTYPE html>
<html lang="en">

<?php include_once('../partials/head.php'); ?>

<body class="register">

    <?php include_once('../partials/header.php'); ?>

    <main class="main" role="main">
        <h2 class="block__subheading">Register</h2>
        <form id="sign-in-form" class="form" role="form">
            <div class="form__input">
                <label class="label" for="name">Name</label>
                <input id="name" type="text" name="name" placeholder="Name" />
            </div>
            <div class="form__input">
                <label class="label" for="email">Email</label>
                <input id="email" type="email" name="email" placeholder="Email" />
            </div>
            <div class="form__input">
                <label class="label" for="password">Password</label>
                <input id="password" type="password" name="password" placeholder="Password" />
            </div>
            <div class="helper__text">
                <p>Choose macros or calories. You can change this setting later in your profile.</p>
            </div>
            <div class="form__radio">
                <input id="macros" type="radio" name="macros__calories" checked />
                <label class="radio" for="macros">Use Macros</label>
                <input id="calories" type="radio" name="macros__calories" />
                <label class="radio" for="calories">Use Calories</label>
            </div>
            <div class="form__input">
                <label class="label" for="submit">Submit</label>
                <button id="submit" class="button orange-dark" type="button"><a href="./success/">Submit</a></button>
            </div>
        </form>
    </main>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<?php include_once('../partials/head.php'); ?>

<body class="register">

    <?php include_once('../partials/header.php'); ?>

    <main class="main" role="main">
        <h2 class="block__subheading">Enter Your Macros</h2>
        <form id="sign-in-form" class="form" role="form">
            <div class="form__input">
                <label class="label" for="macros">Macros (gm)</label>
                <input id="macros" type="tel" name="macros" placeholder="Macros (gm)" />
            </div>
            <div class="form__input">
                <label class="label" for="fat">Fat (gm)</label>
                <input id="fat" type="tel" name="fat" placeholder="Fat (gm)" />
            </div>
            <div class="form__input">
                <label class="label" for="protein">Protein (gm)</label>
                <input id="protein" type="tel" name="protein" placeholder="Protein (gm)" />
            </div>
            <div class="helper__text">
                <p>All macro values are calculated in grams.</p>
            </div>
            <div class="form__input">
                <label class="label" for="submit">Submit</label>
                <button id="submit" class="button orange-dark" type="button"><a href="./favorites/">Submit</a></button>
            </div>
        </form>
    </main>

    <?php include_once('../partials/footer.php'); ?>

</body>

</html>

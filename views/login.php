<!-- main content -->
<main class="main-login">
		<h2>Login</h2>
        <form action="" method="POST" novalidate>
            <label>&#9993; E-mail address:</label>
            <p><input type="text" name="email" size="25" maxlength="50" /></p>
            <label>&#128274; Password:</label>
            <p><input type="password" name="password" size="25" maxlength="25" /></p>
            <p id="login-p"><input id="login-submit" type="submit" name="login" value="Submit" /></p>
            <p class="php-placeholder">{{invalidEmailPass}}</p>
        </form>
</main>

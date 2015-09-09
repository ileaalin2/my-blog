<main class="main-signup">
    <h2>Sign up</h2>
     
    <form action="" method="POST" novalidate>
        <!-- first_name-->
        <label>First Name</label>
        <input type="text" name="first_name" value="{{formFirstName}}">
        <p><span>{{errorFirstName}}</span></p>
        <!-- last_name-->
        <label>Last Name</label>
        <input type="text" name="last_name" value="{{formLastName}}">
        <p><span>{{errorLastName}}</span></p>
        <!-- email-->
        <label>E-mail</label>
        <input type="email" name="email" value="{{formEmail}}">
        <p><span>{{errorEmail}}</span></p>
        <!-- passwords-->
        <label>Password</label>
        <input type="password" name="password">
        <p></p>
        <label>Re-password</label>
        <input type="password" name="repassword">
        <p><span>{{errorPassword}}</span></p>
        <!-- submit-->
        <p><input id="signup-submit" type="submit" name="signup" value="Sign up"></p>	
    </form>
</main>

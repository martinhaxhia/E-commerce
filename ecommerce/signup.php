<?php
 include "./Head.php";
 include "./Navigation.php";

?>
<html>
<body>
<div id="login">
    <h3 class="text-center text-white pt-5">Signup form</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="/signup-func.php" method="post">
                        <h3 class="text-center text-info">Signup</h3>
                        <div class="form-group">
                            <label for="name" class="text-info">Name:</label><br>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-info">Email:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username" class="text-info">Username:</label><br>
                            <input type="username" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-between">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Register"/>
                                <a href="/signing.php" class="text-link"><strong>Go to login</strong></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
<html>
<head>
    <link type="text/css" rel="stylesheet" href="../css/style.css" />
    <script src="../js/Script1.js"></script>
</head>
<body>
    <div class="form_auth_block">
        <div class="form_auth_block_content">
            <p class="form_auth_block_head_text">Authorization</p>
            <form class="form_auth_style" action="#" method="post">
                <label>login</label>
                <input type="text" name="auth_email" placeholder="Enter your login" required>
                <label>password</label>
                <input type="password" name="auth_pass" placeholder="Enter your password" required>
                <button class="form_auth_button" type="submit" name="form_auth_submit" onclick="LogIn()">Log In</button>
            </form>
        </div>
    </div>
</body>
</html>
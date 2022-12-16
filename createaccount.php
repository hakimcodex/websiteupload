<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting system</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
    <div class="top">
        <header>
            <p>Voting System</p>
        </header>

    </div>
    <div class="main">
        <p>Create Account</p>
        <div class="form">
            <form action="signup.php" method="post">
<input type="email"placeholder="E-mail"name="email"required="required"><br>
<input type="password"placeholder="Password..."name="Password"required="required"><br>
<input type="password"placeholder="Retype Password..."name="CPassword"required="required"><br>
<input type="text"placeholder="Names"name="name"required="required"><br>
<input type="file" name="photo" id="photo" accept="image\*">
<label for="photo">Choose Profile image

</label>
<select name="type" id="drop">
    <option value="Group">Group</option>
    <option value="Vote">Vote</option>
</select><br>
<input type="submit" value="Signup" id="btn"><br>

<a href="Login.php">Login</a>


            </form>
        </div>
    </div>
</body>
</html>
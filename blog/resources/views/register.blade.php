<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ethan Hamra Daftar</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <form method="GET" name="signup-form" action="/welcome">
        <h3>Sign Up Form</h3>

        <p class="signup-firstname">First Name :</p>
        <input type="text">

        <p class="signup-lastname">Last Name :</p>
        <input type="text">

        <p class="signup-gender">Gender :</p>
        <input type="radio" name="gender" value="male">Male<br>
        <input type="radio" name="gender" value="famale">Famale<br>
        <input type="radio" name="gender" value="other">Other

        <p class="signup-nationality">Nationality :</p>
        <select name="Nationality" id="nationality">
            <option value="indonesia">Indonesia</option>
            <option value="palestina">Palestina</option>
            <option value="myanmar">Myanmar</option>
        </select>

        <p class="signup-language">Language Spoken :</p>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other

        <p class="signup-bio">Bio :</p>
        <textarea name="" id="" cols="40" rows="20"></textarea>
        <br>

        <input type="submit" value="Sign Up">
    </form>
    
</body>
</html>
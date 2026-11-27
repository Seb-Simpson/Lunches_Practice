<!DOCTYPE HTML>
<html>
<body>
<form action="adduser.php" method="post">
    Forename: <input type= "text" name ="forename"><br>
    Surname: <input type="text" name = "surname"><br>
    House: <input type="text" name = "House"><br>
    Year Group: <input type="number" name="yeargroup"><br> 
    Balance: <input type="text" name = "Balance"><br>
    Password: <input type="text" name = "Password"><br> 
    Role: 
    <input type="radio" name="role" value="student" checked> Student
    <input type="radio" name="role" value="teacher"> Teacher<br>
    <input type="submit" value="Add User">
</form>
</body>
</html>
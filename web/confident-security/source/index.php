<html>
<head>
    <title>LOGIN</title>
    <script src="hash.js"></script>
    <script>
        function hashPassword(password) {
            var passhash = MD5(password);
            document.getElementById("hashedPassword").value = passhash;
        }
    </script>
</head>

<body>
<div id="content">
<?php
    if(array_key_exists("hashed_password", $_REQUEST)) { 
    
    
        if($_REQUEST["hashed_password"] === "3f06c4d55cee53c24f6a555377d2ef98") { 
                echo "Successful login! The flag is cysoc{cl13nt_c4nt_b3_trust3d}"; 
        } else { 
                echo "Access denied!<br>"; 
        } 
    } else { 
    }
    
?>
        <h1>Login</h1>
        <form action="index.php"  method="POST"> 
        Password: <input onchange="hashPassword(value)" name="password" /><br> 
        <input type="hidden" name="hashed_password" id="hashedPassword" /><br>
<input type="submit" value="Login" /> 
</form> 
<p> My passwords are so good that I will even give you the hash that is stored. 3f06c4d55cee53c24f6a555377d2ef98</p>
    
</div>
</body>
</html>
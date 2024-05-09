<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="login/login.css">
</head>
<body>

<form id="loginform" action="#" method="post">
<div id="message"></div> <!-- This is where error messages will be displayed -->
    <h2>Login</h2>
    <input type="text" id="email" name="username" placeholder="Username" required>
    <input type="password" id="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>


<script>
    document.getElementById('loginform').addEventListener('submit', function(event){
        event.preventDefault();
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;

        var datum = {
            email: email,
            password: password,
        }

        fetch("/api/login", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': 'Bearer ' + localStorage.getItem('tokens') // Added space after 'Bearer'
            },
            body: JSON.stringify(datum),
        }).then((res)=> {
            return res.json();
        }).then(data => {
            console.log(data);
            if(data.access_token) {
                localStorage.setItem('tokens', data.access_token);
                window.location.href = '/home';
            } else {
                document.getElementById('message').innerText = data.message;
                document.getElementById('message').style.color = 'red';
            }
        }).catch(error => {
            console.error("Something went wrong!!", error);
        });
    });
</script>

</body>
</html>


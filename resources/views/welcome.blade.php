<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Form</title>
<link rel="stylesheet" href="css/style.css">


<form action="dashboard.html" method="post">
    <h2>Login</h2>
    <input type="text" name="username" placeholder="Username" required>
    <input type="password" name="password" placeholder="Password" required>
    <input type="submit" value="Login">
</form>

<script>
        const loginFormElement = document.getElementById('loginFormElement');

    loginFormElement.addEventListener('submit', function(event){
    event.preventDefault();

    fetch('http://localhost/dashboard_project/back_end/route/login.php', {
        method: 'POST',
        body: new FormData(loginFormElement),
    })
    .then(res => res.json())
    .then(data => {
        console.log(data);
        alert(data.message);
        if(data.message === 'Login Successfull') 
        {
            window.location.href = 'dashboard';
        }
    })
    .catch(error => console.error('error', error));
});
    </script>



</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="users/user.css">

  

</head>




<body>

<div id="sidebar">
  <ul>
    <li><a href="#">Dashboard</a></li>
    <li><a href="#">User</a></li>
    <li><a href="#">Posts</a></li>
  </ul>
  <ul class = "dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
<li><a class = "dropdown-item" href="#" onclick = "logout()">Logout</a></li>

</ul>

</div>

<div id="content">
  <h1>Welcome to Dashboard</h1>
  <h2>Recent Data</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Email</th>
    </tr>
    <tr>
      <td>John Doe</td>
      <td>30</td>
      <td>john@example.com</td>
    </tr>
    <tr>
      <td>Jane Smith</td>
      <td>25</td>
      <td>jane@example.com</td>
    </tr>
    <tr>
      <td>Mike Johnson</td>
      <td>35</td>
      <td>mike@example.com</td>
    </tr>
  </table>
</div>


</script>
</body>
</html>

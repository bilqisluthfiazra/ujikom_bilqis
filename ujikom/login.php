<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Arial, sans-serif;
}

body {
  height: 100vh;
  background: linear-gradient(to right, #3e6985, #8aa7bc, #a6bed1);
  display: flex;
  justify-content: center;
  align-items: center;
}

.login-box {
  background: #cdd7df;
  padding: 30px 25px;
  width: 320px;
  border-radius: 12px;
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.login-box h2 {
  text-align: center;
  margin-bottom: 25px;
  color: #0d273d;
}

.login-box label {
  display: block;
  margin-bottom: 6px;
  color: #0d273d;
  font-weight: bold;
}

.login-box input {
  width: 100%;
  padding: 10px;
  margin-bottom: 18px;
  border: 1px solid #8aa7bc;
  border-radius: 6px;
  outline: none;
}

.login-box input:focus {
  border-color: #3e6985;
}

.login-box button {
  width: 100%;
  padding: 10px;
  background: #0d273d;
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: 0.3s;
}

.login-box button:hover {
  background: #3e6985;
}
</style>
</head>

<body>

<div class="login-box">
  <h2>Login</h2>

  <form action="proses_login.php" method="post">

    <label>Username</label>
    <input type="text" name="username" placeholder="Masukkan username" required>

    <label>Password</label>
    <input type="password" name="password" style="margin-bottom:5px;" placeholder="Masukkan password" required>
    <a href="\ujikom\ganti_password.php" style="text-decoration:none; font-size:13px;">ganti password disini</a>

    <button type="submit" style=" margin-top:15px;">Login</button>

  </form>
</div>

</body>
</html>
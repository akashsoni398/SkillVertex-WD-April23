<?php 

include "./../dbconfig.php";


if(isset($_POST['submit'])) {
    $cpwd = mysqli_real_escape_string($conn,$_POST['cpwd']);
    $npwd = mysqli_real_escape_string($conn,$_POST['npwd']);
    $cnpwd = mysqli_real_escape_string($conn,$_POST['cnpwd']);
    $email = mysqli_real_escape_string($conn,$_SESSION['useremail']);

    if($npwd!="" && $cpwd!="" && $cnpwd!="") {
        if($npwd===$cnpwd) {
          $sql_query = "SELECT password AS hashpwd FROM users WHERE email='$email';";
          $result = mysqli_query($conn,$sql_query);
          $row = mysqli_fetch_array($result);
          if(password_verify($cpwd,$row['hashpwd'])) 
          {
            $hashpwd = password_hash($npwd,PASSWORD_BCRYPT); 
            $sql_query = "UPDATE users SET password='$hashpwd' WHERE email='$email';";
            $result = mysqli_query($conn,$sql_query);
            if($result) {
                header("Location:login.php");
            }
          } 
          else {
            $errmsg = "Old password did not match";
          }
        }
        else {
            $errmsg = "New passwords entered did not match";
        }
    }
    else {
        $errmsg = "All fields are mandatory";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      -webkit-font-smoothing: antialiased;
    }

    body {
      background: #e35869;
      font-family: 'Rubik', sans-serif;
    }

    .changepwd-form {
      background: #fff;
      width: 500px;
      margin: 125px auto;
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: vertical;
      -webkit-box-direction: normal;
              flex-direction: column;
      border-radius: 4px;
      box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
    }
    .changepwd-form h1 {
      padding: 35px 35px 0 35px;
      font-weight: 300;
    }
    .changepwd-form .content {
      padding: 35px;
      text-align: center;
    }
    .changepwd-form .input-field {
      padding: 12px 5px;
    }
    .changepwd-form .input-field input {
      font-size: 16px;
      display: block;
      font-family: 'Rubik', sans-serif;
      width: 100%;
      padding: 10px 1px;
      border: 0;
      border-bottom: 1px solid #747474;
      outline: none;
      -webkit-transition: all .2s;
      transition: all .2s;
    }
    .changepwd-form .input-field input::-webkit-input-placeholder {
      text-transform: uppercase;
    }
    .changepwd-form .input-field input::-moz-placeholder {
      text-transform: uppercase;
    }
    .changepwd-form .input-field input:-ms-input-placeholder {
      text-transform: uppercase;
    }
    .changepwd-form .input-field input::-ms-input-placeholder {
      text-transform: uppercase;
    }
    .changepwd-form .input-field input::placeholder {
      text-transform: uppercase;
    }
    .changepwd-form .input-field input:focus {
      border-color: #222;
    }
    .changepwd-form button.link {
      text-decoration: none;
      background-color: lightgray;
      padding:5px 10px;
      border: none;
      color: #747474;
      letter-spacing: 0.2px;
      text-transform: uppercase;
      display: inline-block;
      margin-top: 20px;
    }
    .changepwd-form .action {
      display: -webkit-box;
      display: flex;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: normal;
              flex-direction: row;
    }
    .changepwd-form .action button {
      width: 100%;
      border: none;
      padding: 18px;
      font-family: 'Rubik', sans-serif;
      cursor: pointer;
      text-transform: uppercase;
      background: #e8e9ec;
      color: #777;
      border-bottom-left-radius: 4px;
      border-bottom-right-radius: 0;
      letter-spacing: 0.2px;
      outline: 0;
      -webkit-transition: all .3s;
      transition: all .3s;
    }
    .changepwd-form .action button:hover {
      background: #d8d8d8;
    }
    .changepwd-form .action button:nth-child(1) {
      background: #2d3b55;
      color: #fff;
      border-bottom-left-radius: 0;
      border-bottom-right-radius: 4px;
    }
    .changepwd-form .action button:nth-child(1):hover {
      background: #3c4d6d;
    }
    .changepwd-form .error {
      color: red;
      margin-top: 10px;
    }
  </style>
</head>
    <body>
        <div class="changepwd-form">
            <form method="post" action=""> 
                <h1>Change Password</h1>
                <div class="content">
                    <div class="input-field">
                        <input type="password" placeholder="Current Password" name="cpwd" cautocomplete="new-password">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="New Password" name="npwd" cautocomplete="new-password">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Confirm New Password" name="cnpwd" cautocomplete="new-password">
                    </div>
                    <p class="error"><?php echo $errmsg ?></p>
                    <button type="submit" name="submit" value="login" class="link">SUBMIT</button><br>
                </div>
            </form>
        </div>
    </body>
</html>
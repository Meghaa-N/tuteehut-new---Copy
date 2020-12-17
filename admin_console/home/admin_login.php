<head><link rel="icon" href="favicon.ico" type="image/icon type"></head>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <head>
    <title>TuteeHUT | Admin console</title>
    
  </head>

<script>
  function password_verify(){
  var flag;
  var user_name = document.forms["login"]["user_name"].value;
  var password = document.forms["login"]["password"].value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      flag =this.responseText;
  }
  
  };
  xhttp.open("GET", "login_verification.php?user_name="+user_name+"&password="+password, false);
  xhttp.send();
if(flag==0)
      {
        document.getElementById('error').innerHTML="Invalid user name or password!";
        return false;
      }
      else
      {
        return true;
      }
     
    }
  </script>
  <body>
    <div style="position: relative;top:2em;left:35%;width:25%">
    <h3>ADMIN CONSOLE</h3>
  </div>
    <section style="position:relative;border:2px solid black;left:25%; top:5em;width:30%;padding:5%;border-radius: 5%">
      <form action="loginhandle.php" class="signup-form" name="login" method='POST' onsubmit="return password_verify()">

<div class="form-group">
<label class="label" for="user_name">User Name<pre style="display:inline;color: red">*      </pre></label>
<input type="text" class="form-control" name="user_name" placeholder="USER NAME" required ">
</div>
<br>
<div class="form-group">
<label class="label" for="password">Password<pre style="display:inline;color: red"> *      </pre></label>
<input id="password-field" type="password" name="password" class="form-control" placeholder="password" required>
</div>
<div class="form-group">
<p id="error" style="color: red"></p></div>
<div class="form-group d-flex justify-content-end mt-4">
<button style="position:relative;left:30%" type="submit" class="btn btn-primary submit">LOGIN</button>
</div>
</form>
</section>
</body>
</head>
</html>
     

<!DOCTYPE html>
<html>
<head>
	<title>Tutor Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <form method="POST" action="logSuccessTutor.php">
    <div class="form sign-in">
      <h2>Sign In</h2>

      <label>
        <span>Email Address</span>
        <input type="email" name="email" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pword" required>
      </label>
      <button class="submit" type="submit">Sign In</button>
      <p class="forgot-pass"><a href = "ResetPassword.php">Forgot Password?</p></a>
      <p class="forgot-pass"><a href="index.php">Back to Home</p></a>
    </div>
    </form>

    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Log in to Start Tutoring</h2>
          <p>Tons of children are waiting for you!</p>
        </div>
        <div class="img-text m-in">
          <h2>Already had an Account?</h2>
          <p>If you already has an account, just sign in. Your students are missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form method="POST" action="conTutorRegister.php" enctype="multipart/form-data">
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="fname" style="text-transform: capitalize;" required>
          <span>Email</span>
          <input type="email" name="email" required>
          <span>Specialization</span>
          <input type='text' name='Specialization' style="text-transform: capitalize;" required>
          <span>Password</span>
          <input type="password" name="pword" required>
          <span>Confirm Password</span>
          <input type="password" name="cnpword" required>
          <span>Contact Number</span>
          <input type="text" name="contact" required>
        </label>
        <label>
          <label for="myfile">Curriculum Vitae:</label>
          <input type="file" id="myfile" name="myfile" required>
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
        
      </div>
      </form>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">

    <div class="form sign-in">
      <h2>Sign In</h2>
      <form method="POST" action="logSuccessStudent.php">
        <label>
        <span>Email Address</span>
        <input type="email" name="email" required>
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="pword" required>
      </label>
      <button class="submit" type="submit">Sign In</button>
      </form>
      <p class="forgot-pass"><a href="StudentResetPassword.php">Forgot Password?</p></a>
      <p class="forgot-pass"><a href="index.php">Back to Home</p></a>
    </div>
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>Craving for Learnings?</h2>
          <p>Sign up and discover new learning in with our great tutor!</p>
        </div>
        <div class="img-text m-in">
          <h2>Already had an Account?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form method="POST" action="conStudentRegister.php">
        <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" name="fname" required>
        </label>
        <label>
          <span>Email</span>
          <input type="email" name="email" required>
        </label>
        <label>
          <span>Password</span>
          <input type="password" name="pword" required>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" name="cnpword" required>
        </label>
        <label>
          <span>Contact Number</span>
          <input type="text" name="contact" required>
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
      </div>
      </form>
    </div>
  </div>
<script type="text/javascript" src="script.js"></script>
</body>
</html>
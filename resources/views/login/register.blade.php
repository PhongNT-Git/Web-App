<link rel="stylesheet" href="public/login/styles.css">

<div class="form-container">
  <span class="arrow" onclick="arrowClick();"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></span>
  <img src="https://1.bp.blogspot.com/-GRsCe0iNyDY/XfyIB4mOniI/AAAAAAAASA0/oFUJNmVG5VEtZCtQ8fT3IOuZT_Lbt9w1wCPcBGAYYCw/s1002/tech%2Bwallpapers-ashueffects%2B%25283%2529.jpg" alt="Background image" class="bg">
  <div class="overlay"></div>
  <div class="choose-form">
    <div class="logo">
      <i class="fa fa-snowflake-o" aria-hidden="true"></i>
      <h1>Web<span class="bold">Chat</span></h1>
    </div>
    <div class="buttons">
      <a href="#" class="button button-signup" onclick="signUp();">Sign up</a>
      <a href="#" class="button button-login" onclick="login();">Login</a>
    </div>
  </div>
  <div class="login-form form">
    <div class="form-wrapper">
      <form method="post">
        <label for="login-username">Username</label>
        <input id="login-username" type="text" placeholder="Username" name="username" required>
        <label for="login-password">Password</label>
        <input id="login-password" type="password" placeholder="Password" name="password" pattern=".{3,}" title="Password must contain at least 3 characters" required>
        <a href="#" class="forgot-password">Forgot password?</a>
        <button type="submit" class="button button-submit">Login</button>
      </form>
      <div class="social-media">
        <h6>Or connect with</h6>
        <a href="#" class="button button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;facebook</a>
        <a href="#" class="button button-google"><i class="fa fa-google" aria-hidden="true"></i>&nbsp;google</a>
      </div>
    </div>
  </div>
  <div class="register-form form">
    <div class="form-wrapper">
      <form method="post">
        <label for="signup-email">Email</label>
        <input id="signup-email" type="email" placeholder="example@hotmail.com" name="email" required>
        <label for="signup-username">Username</label>
        <input id="signup-username" type="text" placeholder="Username" name="username" required>
        <label for="signup-password">Password</label>
        <input id="signup-password" type="password" placeholder="Password" name="password" pattern=".{3,}" title="Password must contain at least 3 characters" required>
        <button type="submit" class="button button-submit">Sign up</button>
      </form>
      <div class="social-media">
        <h6>Or connect with</h6>
        <a href="#" class="button button-facebook"><i class="fa fa-facebook" aria-hidden="true"></i>&nbsp;facebook</a>
        <a href="#" class="button button-google"><i class="fa fa-google" aria-hidden="true"></i>&nbsp;google</a>
      </div>
    </div>
  </div>
</div>
<script src="public/login/styles.js"></script>

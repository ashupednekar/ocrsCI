<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #9CECFB;
  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #0052D4, #65C7F7, #9CECFB);
  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
}
    </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <!--<form class="form-signin">-->
              <!--<div class="form-label-group">-->
                <!--<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>-->
                <!--<label for="inputEmail">Email address</label>-->
              <!--</div>-->

              <!--<div class="form-label-group">-->
                <!--<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>-->
                <!--<label for="inputPassword">Password</label>-->
              <!--</div>-->

              <!--<div class="custom-control custom-checkbox mb-3">-->
                <!--<input type="checkbox" class="custom-control-input" id="customCheck1">-->
                <!--<label class="custom-control-label" for="customCheck1">Remember password</label>-->
              <!--</div>-->
              <!--<button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>-->
              <!--<hr class="my-4">-->
            <!--</form>-->
              <div style="margin:50px 50px 60px 50px ">
                      <form method="post" action="<?= base_url()?>/index.php/Login/log_in">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" name="email" id='email' aria-describedby="emailHelp" placeholder="Enter email">
                              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                          </div>
                          <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" name="password" id="'password" placeholder="Password">
                          </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
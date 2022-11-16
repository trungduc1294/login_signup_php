 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <!-- text font -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
   <!-- font awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
     integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
     crossorigin="anonymous" referrerpolicy="no-referrer" />
 </head>
 <style>
* {
  font-family: 'Lato', sans-serif;
  margin: 0;
  padding: 0;
}

body {
  padding: 10px 20px;
}

.signUp {
  background-color: white;
}

.signUp__header {
  display: flex;
  justify-content: space-between;
  border-bottom: 1px rgb(221, 221, 221) solid;
  padding-bottom: 20px;
}

.signUp__header i {
  margin-top: 10px;
  font-size: 20px;
}

.signUp__form {
  padding-top: 20px;
  border-bottom: 1px rgb(219, 219, 219) solid;
}

.signUp__form label {
  display: block;
  font-weight: 700;
}

.signUp__form input {
  width: 97%;
  height: 30px;
  margin-top: 5px;
  margin-bottom: 10px;
  border-radius: 7px;
  padding-left: 10px;
  border: 1px rgb(145, 145, 145) solid;
}

.signUp__form button {
  width: 100%;
  height: 32px;
  border-radius: 7px;
  border: none;
  background: rgb(100, 160, 216);
  color: white;
  font-weight: 400;
  font-size: 14px;
  margin-top: 20px;
  margin-bottom: 30px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
}

.signUp__login_redirect {
  text-align: center;
  margin-top: 30px;
  margin-bottom: 30px;
}

.signUp__login_redirect p {
  color: rgb(141, 141, 141);
}

.signUp__login_redirect a {
  text-decoration: none;
  color: rgb(0, 135, 212);
}
 </style>

 <body>
   <div class="signUp">
     <div class="signUp__header">
       <h1>Sign Up</h1>
       <i class="fa-solid fa-x"></i>
     </div>

     <!-- Show error msg -->
     <?php
      if (isset($_GET['error'])) {
        echo $_GET['error'];
      }
      ?>

     <div class="signUp__form">
       <form action="signup_process.php" method="post">
         <label>Name</label>
         <input type="text" name="name" placeholder="your name">
         <label>Email</label>
         <input type="email" name="email" placeholder="example@gmail.com">
         <label>Password</label>
         <input type="password" name="password" placeholder="at least 8 characters">
         <button>Sign Up</button>
       </form>
     </div>
     <div class="signUp__login_redirect">
       <p>Already have an acount?</p>
       <a href="login.php">Login</a>
     </div>
   </div>
 </body>

 </html>
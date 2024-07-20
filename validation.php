  <?php 
$nameError="";
$phError="";
$genderError="";
$ageError="";
$emailError="";
$addressError="";


if(isset($_POST['submit'])){
  
// !name validation
$name=$_POST['name'];
$age=$_POST['age'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
// $gender=$_POST['gender'];

// !name validation
if(empty($name)){
$nameError="Name field can't be empty";
}
else{
  if(!preg_match("/^[a-zA-z]*$/",$name)){
    $nameError="Invalid name";

  }
}

// !phone validation

if(empty($phone)){
$phError="number invalid";
}else{
if(!preg_match("/^[0-9]*$/",$phone)){
  $phError="invalid number";
}
}

// !age validation
if(empty($age)){
$ageError="Age field can't be empty";
}else{
  if(!($age>18) && ($age<35)){
$ageError="sorry but you don't fulfill the age condition";
  }
}

// ! email validation
if(empty($email)){
$emailError="email field required";
}else{
  if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailError="Invalid email";
  }
}


}
?>  

    <!-- <form action="<?php $_PHP_SELF?>" method="post">
      <div class="container">
        <label for="name">Name</label>

        <input
          type="text"
          spellcheck="true"
          placeholder="Enter your name"
          name="name"
        />
        <span><?php $nameError ?></span>
        </div>
      <div>
        <label for="phone">Phone no:</label>
        <input type="number" placeholder="Enter your number" name="ph" />
        <span><?php $phError ?></span>
      </div>
      <div>
        <label for="gender">select gender:</label>
        <label for="male">male</label>
        <input type="radio" value="male" name="gender" />
        <label for="male" >female</label>
        <input type="radio" value="female" name="gender" />
        <label for="male">other</label>
        <input type="radio" value="other" name="gender" />
      </div>
      <div>
        <label for="age">Age</label>
        <input type="number" placeholder="Enter your age" name="age" />
      </div>
      <div>
        <label for="email">Email</label>
        <input type="email" placeholder="Enter your Email" name="email" />
      </div>
      <div>
        <label for="address">address</label><br />
        <textarea name="address" id="address"></textarea>
      </div>
      <div><button name="submit">submit</button></div>
    </form>
  </body>

</html>
 -->

 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRATION Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
 <style>
   *{
     margin: 0;padding: 0;
     box-sizing: border-box;
     color:white;
   }
  body{
    height:100vh;
    width: 100%;
    background-image: url(fba301ac9c5c454406557689a66d22d7.jpg);
    background-size: 100% 100%;
    display:flex;
    justify-content:center;
    align-items:center;
  }
  h1{
    text-align:center;
  }
  .container{
    height:40rem;
    margin:1rem;
  }
  form{
    /* position:relative; */
    height:45rem;
    width:50rem;
    backdrop-filter: blur(4px);
    padding: 2rem;
    border-radius:10px;
    box-shadow:0 0 10px aqua;
    /* margin:0px 20rem; */
  }
  input{
    /* margin: 10px; */
  }
  .error{
    font-size: 15px;
    color:red;
    font-weight:700;
    /* position:absolute; */
  }
 </style>
  </head>
  <body>
  <form action="<?php $_PHP_SELF ?>" method="POST">
    <h1>REGISTRATION FORM</h1>
    <label for="name" class="form-label">Name</label>
<input type="text" id="name" class="form-control" name="name" placeholder="Enter your name" value="<?php $name ?>">
<div id="passwordHelpBlock" class="form-text error">
 <?php echo $nameError ?>
</div>
<label for="age" class="form-label">Age</label>
<input type="integer" id="age" class="form-control" name="age" placeholder="Enter your age" value="<?php $age ?>" >
<div id="passwordHelpBlock" class="form-text error" >
 <?php echo $ageError ?>
</div>
<label for="phone" class="form-label">Phone</label>
<input type="integer" id="phone" name="phone" class="form-control" placeholder="Enter your phone number" value="<?php $phone ?>">
<div id="passwordHelpBlock" class="form-text error" >
<?php echo $phError ?>
</div>
<label class="form-check-label" >Gender:</label><br>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1">
  <label class="form-check-label" for="flexRadioDefault1">
male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
    female
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" >
  <label class="form-check-label" for="flexRadioDefault2">
    other
  </label>
</div>
<div id="passwordHelpBlock" class="form-text error" >
</div>
<label for="email" class="form-label">Email</label>
<input type="email" id="age" class="form-control" placeholder="Enter your Email" name="email">
<div id="passwordHelpBlock" class="form-text error">
 <?php echo $emailError ?>
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="<?php $name ?>">
  </div>
  <div class="col-auto m-4">
    <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
  </div>
  </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
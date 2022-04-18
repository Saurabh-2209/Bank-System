<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <style>
      
.contact{
  padding: 20px;
  background-color: #f8bbbb73;
}
h2{
  text-shadow: 2px 2px 2px aqua;
}

.container {
  background-color: rgba(2, 2, 3, 0.472);
  border: 6px solid rgba(0, 0, 0, 0.438);
  border-radius: 10px;
  padding: 20px;
  width: fit-content;
 
}
.box {
  width: 100%;
  color: #9e6b6b;
  padding: 15px 0;



}

.box input {
  width: 320px;

  margin: 0px 5px;
  color: aliceblue;
  font-size: 20px;
  border: none;
  outline: none;
  border-bottom: 4px solid rgb(212, 238, 128);
  background: none;
}

.box ::placeholder {
  color: #abffe9;
}
.btn{
  border: 3px solid blueviolet;
  
  background:none;
  color:rgb(50, 1, 1);
  margin-right: 10px;
  margin-top: 10px;
}
.btn:hover{
  font-weight:bold;
  transform: scale(0.8);
}
.btn:active {
  background-color: #3e8e41;
  box-shadow: 0 2px #7c6359;
  transform: translateY(3px);
}

@media screen and (max-width:500px) {
  .box input{
    width:250px;
  }
  
}
    </style>
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('New User Added!!! Checkout Below....');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>
 <div class="contact" id="contact" align="center"> 
 <h2 class="text-center pt-4">Add a User</h2>

       <form method=post> 
    <div class="container">
        <div class="box">
            <input type="text" name="name" id="name" placeholder="Name"><br>
        </div>
       
        <div class="box">
            <input type="email" name="email" id="email" placeholder="Email Id"><br>
        </div>
        <div class="box">
            <input type="text" name="balance" id="balance" placeholder="Account Balance"><br>
        </div>
       
        <button class="btn btn-success" name="submit" type="submit">Submit</button>
        <button class="btn btn-success" type="reset">Reset</button>
</div>
</form>
        
  </div>
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
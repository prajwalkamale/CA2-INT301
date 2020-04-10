
<?php
    $msg = "";
    $show = "";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $conn = mysqli_connect('localhost','root','','Prajwal');
        if(!$conn){
            echo "Connection Failed!<br>".mysqli_error($conn);
        }
        $fname = $_POST['Firstname'];
        $lname = $_POST['Lastname'];
        $email = $_POST['Email'];
        $sql1 = "INSERT INTO users(first_name,last_name,email)VALUES('$fname','$lname','$email')";
        if(mysqli_query($conn,$sql1)){
            $msg = "Inserted Successfully";
        }else{
            $msg = "Error inserting values " .mysqli_error($conn);
        }
    }
?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 10px solid #373aa9;}
form {
    display: block;
    margin-top: 0em;
margin-left: 20px;
margin-right: 35em;

}

input[type=text], input[type=password] {
  width: 45%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
 
}

button {
  background-color: #FF1493;
  color: White;
  padding: 15px 20px;
  margin: 15px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}

button:hover {
  opacity: 0.8;
}




span.psw {
  float: right;
  padding-top: 16px;
}

}
</style>
</head>
<body>

<h2>&nbsp; &nbsp;FORM</h2>

<form action="/action_page.php" method="post">
  
&nbsp; First Name: <input type="text" name="name">
  	<span class="error"></span>
 	 <br><br>

	 &nbsp; Last Name: <input type="text" name="name">
  	<span class="error"></span>
 	 <br><br>
                
        &nbsp;   Email: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="text" name="name">
  	<span class="error"></span>
 	 <br><br>
                
                
                
  <div class="container">
  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;   &nbsp;  &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;
    <button type="submit" >Submit</button> 
   
    &nbsp; &nbsp;  &nbsp; &nbsp; 
  
    
          
                <button type="submit"> Show</button>
 <br>

    
  
</form>

</body>
</html>

<?php

        $myfile = fopen("test.txt", "r");
        $readfile = fread($myfile, filesize("test.txt"));
        $data = explode("|", $readfile);

    
    if (isset($_REQUEST['submit'])){

   
          
          $uname = $_POST['uname'];
          $pass = $_POST['password'];

          $error3 = "";
          $error7 = "";

       
        if(empty($uname))
        {
            $error7 .="Please enter your User Name!";
            
        }
       elseif($data[2] != $uname)
        {
            $error7 .= "Invalid User Name";
        }

        if(empty($pass))
        {
            $error3 .="Password is required!";
            
        }
       elseif($data[3] != $pass)
        {
            $error3 .="Invalid Password!";
            
        }
       
       else{
          echo "Login Successful!";
         
          }
        }
            
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
    .button {
  border: none;
  color: white;
  background-color:#574b90;
  padding: 8px 16px;
  text-align: center;
  text-decoration: none;
  border-radius:4px;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;

}

</style>
</head>
<body>
    <form method="post">
     <table width="500px" border="3px" align="center" style="background:#786fa6;">
       <tr>            
            <td>                
                <fieldset>                    
                        <legend><b>LOGIN</b></legend>
                        <Label for="username">User Name</Label>
                        <input type="text" name="uname" value="" > 
                         <?php
                    if (isset($error7))                     
                    {echo $error7 ;}
                    ?>
                    <br> <hr>
                        <Label for="password">Password</Label>
                        <input type="password" name="password" value="" >
                        <?php
                    if (isset($error3))                     
                    {echo $error3 ;}
                    ?>
                     <br>

                        <hr>
                        <input type="checkbox" name="Remember" value="">
                        <label for="Remember">Remember me</label> <br> <br>
                        <button type="button" class="button">Submit</button>
                        <a href="chngpass.php">Forget Password?</a>
                </fieldset>
                                
                </td>        
            </tr>  
      </table>
    </form>
</body>
</html>
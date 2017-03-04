<!DOCTYPE html>

<html>
    <head>
        <?php
        include('db.php');

$username = @$_POST['username'];
$password = @$_POST['password'];
$repeatpassword = @$_POST['repeatpassword'];
$submit = @$_POST['submit'];





        
        
if($submit){

    
    
    if($username==true){
        
        if($password==true){
       
           if($password==$repeatpassword){
               
                if(strlen($username)<50||strlen($username)<50){
                    
                    if(strlen($password)<50||strlen($password)<5){
                       
                        /* Fix This */
                  $passwordmd5 = md5($password);
                   if(isset($_REQUEST['submit'])){
       $u_insert = "INSERT INTO users (username, password)
        values ('".$_REQUEST['username']."', '".$_REQUEST['password']."')";
       mysqli_query($db , $u_insert);
      }
                    
                    
                        
                    
                        
                    }
                    else
                    echo "Your password must be more than 5 characters!";
                }
               else
                echo "Maximum length for username is 50 characters!";
           }
            else
            echo "Your passwords don't match!";
            
        }else
        echo " Please input a password!";
        
    }
    else
    echo "Please input a username!";
    
    

};
?>
    </head>
    <body>
    
<form method="post"> 
Username:<input name="username" type="text"><br>
Password:<input name="password" type="password"><br>
RepeatPassword:<input name="repeatpassword" type="password"><br>
<input name="submit" type="submit" value="Submit">
</form>
   

 </body>
</html>
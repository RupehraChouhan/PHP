<html>

<head>

<?php


$username = @$_POST['user_name'];
$password = @$_POST['password'];
$repeatpassword = @$_POST['repeatpassword'];
$submit = @$_POST['submit'];
$encpassword = md5($password);
$ID = 100;





$mysqli = new mysqli("localhost", "root", "goodtogo", "bsquared_user");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($submit){
    
    if($username == true)
    {
        
        
        
        if($password == true)
        {
            
            if($password==$repeatpassword)
            {
                
                if(strlen($username)<50)
                {
                    
                    
                    if(strlen($password <50||strlen($password)>5))
                    {
                        
                        $insert=mysqli_query($mysqli,"INSERT INTO user VALUES ('$ID','$username','$encpassword','')");
                        if ( false===$insert ) {
                            printf("error: %s\n", mysqli_error($mysqli));
                        }
                        
                        
                        
                    }
                    else
                        echo
                        "password length is between 5 to 50 characters";
                    
                }
                else
                    echo "the maximum length for username is 50";
                
            }
            else
                echo"you did not successfully repeat your password";
            
        }
        else
            echo "please enter a password";
        
    }
    else 
        echo "please enter a username";
}

?>

</head>


<body>
    <form id="form1" method ="post">   
        Username: <input name ="user_name" type="text" />
        Password: <input name ="password" type="password" />
        Repeat Password: <input name ="repeatpassword" type="password" />
        <input name ="submit" type="submit"/>
    </form>
</body>
</html>
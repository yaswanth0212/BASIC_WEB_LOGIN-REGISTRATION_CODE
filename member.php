<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  
<!doctype html>  
<html>  
<head>  
<title>Welcome</title>  
    <style>   
        body{  
              
    margin-top: 100px;  
    margin-bottom: 100px;  
    margin-right: 150px;  
    margin-left: 80px;  
    background-color: azure ;  
    color: palevioletred;  
    font-family: verdana;  
    font-size: 100%  
      
        }  
            h2 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
        h1 {  
    color: indigo;  
    font-family: verdana;  
    font-size: 100%;  
}  
h3{
size:100%;
}
              
          
    </style>  
</head>  
<body>  
     
      
<h2>Welcome, <?=$_SESSION['sess_user'];?>! </h2>  
<p>  
Successfully logged in!!!  
</p>  
<p>
</a>
</p>
<p>
<p>  
</p>
<p>  
</p> 
<p>  
</p> 

<a href="logout.php">
<img border="0" alt="Logout" src="logout.png" width="100" height="100" align="right">
</a>

</p>
</body>  
</html>  
<?php  
}  
?>  
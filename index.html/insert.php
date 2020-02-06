<?php
$con=new mysqli('localhost','root','','hai');

?>
<html>
    <head>
          <title>hacking login</title>
    </head>
    <body background="image1.PNG">
        <form action="insert.php" method="post">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

             <table border="1px" align ="center">
                 <tr><td>Name</td><td><input type="text" name="name"></td></tr>
                 <tr><td>Password</td><td><input type="text" name="pass"></td></tr>
                 <tr><td>Repassword</td><td><input type="text" name="rp"></td></tr>
                 <tr><td>Email</td><td><input type="text" name="email"></td></tr>
                 <tr><td>Phone</td><td><input type="text" name="ph"></td></tr>
                 <tr><td colspan='5'><input type="submit" name="submit" Value="LOGIN"></td></tr>
          
   </table>
       
        </form>
        <?php
           if(isset($_POST['submit']))
            {
             $name=$_POST['name'];
             $pass=$_POST['pass'];
             $rpass=$_POST['rp'];
             $email=$_POST['email'];
             $ph=$_POST['ph'];
             if($name!=""&&$pass!="")
             {
             $sql="INSERT INTO welcomes(name,pwd,rpwd,email,phone) VALUES('$name','$pass','$rpass','$email','$ph')";
            
        ?>
<a href="hackingwebsites.html"><h1>NEXT</h1></a>
   </body>
<style >
	body{
		background-color:black;
               
		color :yellow;
		text-align: center;
		
	}
</style>
</html>
<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

     foreach ($_POST as $key => $value)
       error_log($key.'='.$value);
   /*
 if( $_GET["name"] || $_GET["email"] || $_GET["contact"])
{
echo "Welcome: ". $_GET['name']. "<br />";
echo "Your Email is: ". $_GET["email"]. "<br />";
echo "Your Mobile No. is: ". $_GET["contact"];
}  
 ?>
 
 if( $_POST["name"] || $_POST["email"] || $_POST["contact"])
{
echo "Welcome: ". $_POST['name']. "<br />";
echo "Your Email is: ". $_POST["email"]. "<br />";
echo "Your Mobile No. is: ". $_POST["contact"];
} */
?>
 </body>
</html

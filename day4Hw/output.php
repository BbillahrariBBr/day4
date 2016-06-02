<?php

echo "<pre>";
print_r($_POST);

//$data=$_POST;
if(isset($_POST["fname"])&& !empty($_POST["fname"]))
{
    echo "Your First Name is: " .$_POST["fname"]."<br>";
}
 else {
    echo 'First Name Not provide'."<br>";
}

if(isset($_POST["lname"])&& !empty($_POST["lname"]))
{
    echo "Your Last Name is: " .$_POST["lname"]."<br>";
}
 else {
    echo 'Last Name Not provide'."<br>";
}

if(isset($_POST["add"])&& !empty($_POST["add"]))
{
    echo "Your Address is: " .$_POST["add"]."<br>";
}
 else {
    echo 'Address Not provide'."<br>";
}

if(isset($_POST["email"])&& !empty($_POST["email"]))
{
    echo "Email Name is: " .$_POST["email"]."<br>";
}
 else {
    echo 'Email Not provide'."<br>";
}
if(isset($_POST["phone"])&& !empty($_POST["phone"]))
{
    echo "Your Phone is: " .$_POST["phone"]."<br>";
}
 else {
    echo 'Phone Not provide'."<br>";
}

?>

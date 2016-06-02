<?php
echo "<pre>";
print_r($_POST);
//$n1=$_POST['nmbr1'];
//$n2=$_POST['nmbr2'];
//$rr;
if(empty($_POST['nmbr1'])&& empty($_POST['nmbr2']))
    
{
   echo "Number not provide";
    
}
 else {
     
      if(isset($_POST['add']))
    {
        echo "Addition is: ";
        echo $_POST['nmbr1']+ $_POST['nmbr2'];
    }
    elseif(isset($_POST['sub']))
    {
        echo "Subtruction is: ";
        echo $_POST['nmbr1']- $_POST['nmbr2'];
    }
    elseif(isset($_POST['mul']))
    {
        echo "Multiiplication is: ";
        echo $_POST['nmbr1']* $_POST['nmbr2'];
    }
    elseif(isset($_POST['div']))
    {
        echo "Divition is: ";
        echo $_POST['nmbr1']/ $_POST['nmbr2'];
        
    }
     
    
}




?>


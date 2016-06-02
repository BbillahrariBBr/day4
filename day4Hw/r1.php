<?php
echo "<pre>";
print_r($_POST);
// $n1=$_POST['nmbr1'];
// $n2=$_POST['nmbr2'];
 if (empty($_POST['nmbr1']) && empty($_POST['nmbr2']))
     echo 'number not provide';
 else {
    $n1=$_POST['nmbr1'];
    $n2=$_POST['nmbr2']; 
    if($_POST['operator']== 'add')
    {
        echo'Addition is: ';
        echo $n1+$n2;
    }
    if($_POST['operator']== 'sub')
    {
        echo'Subtraction is: ';
        echo $n1-$n2;
    }
    if($_POST['operator']== 'mul')
    {
        echo'multiplication is: ';
        echo $n1*$n2;
    }
    if($_POST['operator']== 'div')
    {
        echo'Divition is: ';
        echo $n1/$n2;
    }
}
?>


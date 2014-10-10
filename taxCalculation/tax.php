<?php
echo FALSE."<br/>";
echo("first name:".$_POST['fname']);
echo '<br/>';
echo "last name:".$_POST['lname'];
echo '<br/>';
echo "salary:".$_POST['salary'];
echo '<br/>';
$deductions;
$salary=$_POST['salary'];

if(isset($_POST['paye'])){
    echo "paying PAYE";
    $deductions +=$salary*(30/100);
}
echo '<br/>';
if(isset($_POST['nssf'])){
    echo "paying nssf";
    $deductions +=$salary*(5/100);
}
echo '<br/>';
echo "your net salary is:...".$salary-$deductions;
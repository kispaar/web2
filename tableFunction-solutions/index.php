<?php
$home = array("email" => "h@home.com", "tel" => "999");
$school = array("email" => "s@sch.com", "tel" => "122");
$contacts = array("home" => $home, "school" => $school);
//Naive implementation
function tablesolution1($collection) {
    echo "<table border=1>";
    echo "<tr><th>Name</th> <th>Email</th><th>Telphone</th></tr>";
    echo "<tr><td>home</td> <td>".$collection['home']['email']."</td><td>".$collection['home']['tel']."</td></tr>";
    echo "<tr><td>school</td> <td>".$collection['school']['email']."</td><td>".$collection['school']['email']."</td></tr>";
    echo "</table>";
}

tablesolution1($contacts);
?>
    

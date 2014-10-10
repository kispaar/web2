<?php

$home = array("email" => "h@home.com", "tel" => "999");
$school = array("email" => "s@sch.com", "tel" => "122");
$contacts = array("home" => $home, "school" => $school);

//reusable implementation
function tablesolution2($collection) {
    echo "<table border=1> <tr><th>Name</th>";
    foreach ($collection as $key => $value) {
        foreach ($value as $keys => $values) {
            echo "<th>$keys</th>";
            break;
        }
    }
    echo "</tr>";
    
    foreach ($collection as $k => $v) {
        echo "<tr>";
        echo "<td>$k</td>";
        foreach ($v as $ks => $vs) {
            echo "<td>$vs</td>";
        }
        echo '</tr>';
    }
    echo "</table>";
}

tablesolution2($contacts);


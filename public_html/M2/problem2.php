<?php
$a1 =[10.001,11.101,0.011,3.991,16.121,8.131,100.231,1.001];
$a2 =[1.99,1.99, 0.99, 1.973, 0.99,1.91, 0.91, 0.99];
$a3 =[0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 0.01, 01.01];
$a4 =[10.01, -12.22, 0.23, 29.20, -5.13, 2.12];
function getTotal($arr) {
    //ov33, 05/01/2023
    echo "<br>Processing Array: <br> <pre>". var_export($arr, True) . "</pre>";
    $total = 0.00;
    //TODO do adding here
    foreach($arr as $i)
        $total += $i;
    //TODO do rounding stuff here
    echo "<br>The total is ".var_export((round($total,2)), true);
 }
echo "Problem 2: Adding Floats<br>";
?>
<table>
<thead>
    <th>A1</th>
    <th>A2</th>
    <th>A3</th>
    <th>A4</th>
</thead>
<tbody>
    <tr>
        <td>
            <?php getTotal($a1); ?>
        </td>
        <td>
            <?php getTotal($a2); ?>
        </td>
        <td>
            <?php getTotal($a3); ?>
        </td>
        <td>
            <?php getTotal($a4); ?>
        </td>
    </tr>
</tbody>
</table>
<style>
    table {
        border-spacing: 2em 3em;
        border-collapse: separate;
    }

    td {
        border-right: solid 1px black;
        border-left: solid 1px black;
    }
</style>
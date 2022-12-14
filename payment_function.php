<?php
    $dbconn = pg_connect("host=localhost  dbname=Hospital user=postgres password=Meegee12");
    $result_str = $result = '';
if (isset($_POST['submit'])) {
    $units = $_POST['submit'];
    if (!empty($units)) {
        $result = calculate_bill($units);
        $result_str = 'Total amount of ' . $units . ' - ' . $result;
    }
}
function calculate_bill($units)
{
    $unit_cost_first = 10;
    $unit_cost_second = 50;
    $unit_cost_third = 5;

    if ($units <= 50) {
        $bill = $units * $unit_cost_first;
    } else if ($units > 10) {
        $temp = 50 * $unit_cost_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_cost_second);
    } else if ($units > 50) {
        $temp = (50 * 3.5) + (100 * $unit_cost_second);
        $remaining_units = $units - 5;
        $bill = $temp + ($remaining_units * $unit_cost_third);
    } return number_format((float)$bill, 2, '.', '');
}
   



pg_close($dbconn)
?>
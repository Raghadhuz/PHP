<?php
class DateDifference {

    public function calculateDifference($date1, $date2) {
        $startDate = new DateTime($date1);
        $endDate = new DateTime($date2);

        $difference = $startDate->diff($endDate);

        return "Difference : " .
               $difference->y . " years, " .
               $difference->m . " months, " .
               $difference->d . " days";
    }
}
$dateDiff = new DateDifference();
echo $dateDiff->calculateDifference("1981-11-03", "2013-09-04");
?>

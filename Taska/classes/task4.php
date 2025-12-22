<?php
class ArraySorter {

    public function sortArray($arr) {
        sort($arr);
        return $arr;
    }
}
$numbers = array(11, -2, 4, 35, 0, 8, -9);

$sorter = new ArraySorter();
print_r($sorter->sortArray($numbers));
?>

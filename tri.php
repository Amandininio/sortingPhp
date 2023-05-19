<?php
$randomArray = makeRandomArray();



echo "Before sorting \n".implode(' ', $randomArray).PHP_EOL;


/**
 * BUBBLE SORTING
 */
$bubbleSortArray = $randomArray;
$timeStart = microtime(true);
bubbleSort($bubbleSortArray);
echo "time = ".((microtime(true) - $timeStart)*1000)."ms".PHP_EOL;
echo "Result Bubble Sorting:\n    ".implode(' ', $bubbleSortArray).PHP_EOL;

/**
 * INSERTION SORTING
 */
$insertionSortArray = $randomArray;
$timeStart = microtime(true);
insertionSort($insertionSortArray);
echo "time = ".((microtime(true) - $timeStart)*1000)."ms".PHP_EOL;
echo "Result Insertion Sorting:\n    ".implode(' ', $insertionSortArray).PHP_EOL;

/**
* @param Integer[] $nums
* @return NULL
*/
function bubbleSort(array &$nums)
{
    $numsLength = count($nums);

    $swapped = true;
    while ($swapped) {
        $swapped = false;
        for ($i = 0; $i < ($numsLength - 1); $i++) {
            if ($nums[$i] > $nums[$i + 1]) {
                $tempNum = $nums[$i];
                $nums[$i] = $nums[$i + 1];
                $nums[$i + 1] = $tempNum;
                $swapped = true;
            }
        }
    }

}

function insertionSort(array &$nums)
{
    for ($i = 1; $i < count($nums); $i++) {
        $j = $i;
        while (($j > 0) && ($nums[$j] < $nums[$j - 1])) {
            $tempInt = $nums[$j -1];
            $nums[$j - 1] = $nums[$j];
            $nums[$j] = $tempInt;
            $j--;
        }
    }
}
/**
 * @return Integer[]
 */
function makeRandomArray():array
{
    $array = [];
    $arrayLength = rand(5, 50);
    while ($arrayLength--) {
        $array[] = (rand(0, 1000));
    }

    return $array;
}

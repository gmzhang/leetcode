<?php

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target)
    {
        $indexMap = [];

        foreach ($nums as $key => $val) {
            $another = $target - $val;
            if (array_key_exists($another, $indexMap)) return [$indexMap[$another], $key];
            $indexMap[$val] = $key;
        }
        return [];
    }
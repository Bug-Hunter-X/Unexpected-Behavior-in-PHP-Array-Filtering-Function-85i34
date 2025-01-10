# PHP Array Filtering Bug

This repository demonstrates a subtle bug in a PHP function designed to filter an array and keep only string values. The function doesn't handle null values or other non-string data types gracefully, resulting in unexpected behavior or potential errors.

## Bug Description
The `my_function` function aims to filter an input array, retaining only string elements.  However, it lacks robust handling for null values and other data types which might exist within the array. This can lead to unexpected results or even runtime errors depending on the input. 

## Solution
The solution improves the function by explicitly checking for null values and using `is_string` to safely filter only string elements.  This ensures that the function handles various input scenarios correctly.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` to see the original buggy behavior.
3. Run `bugSolution.php` to see the corrected output. 
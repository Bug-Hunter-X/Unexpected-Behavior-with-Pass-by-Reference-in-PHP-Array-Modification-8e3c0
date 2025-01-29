# PHP Pass-by-Reference Bug

This repository demonstrates a common, yet subtle, bug in PHP related to pass-by-reference and array modifications within functions. The bug arises from a misunderstanding of how PHP handles references when working with arrays.

The `bug.php` file shows the problematic code, while `bugSolution.php` provides a corrected version.

## Bug Description

The issue lies in how the `increment_array_values` function modifies the input array.  It modifies the array in place using pass-by-reference.  Attempting to reassign the array after the function's modification leads to unexpected behavior and potentially errors, due to reference issues.
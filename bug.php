```php
function increment_array_values(array &$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$arr = [1, 2, 3];
increment_array_values($arr);
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

$arr2 = [1, 2, 3];
$arr2 = increment_array_values($arr2); // Error: the function is modifying the array by reference.
print_r($arr2); // Error: Notice: Only variables should be passed by reference
```
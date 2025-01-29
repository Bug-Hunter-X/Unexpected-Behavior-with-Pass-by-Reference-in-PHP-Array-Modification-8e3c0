```php
function increment_array_values(array $arr) {
  $newArr = [];
  foreach ($arr as $value) {
    $newArr[] = $value + 1;
  }
  return $newArr;
}

$arr = [1, 2, 3];
$arr = increment_array_values($arr); // Correct solution
print_r($arr); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

```
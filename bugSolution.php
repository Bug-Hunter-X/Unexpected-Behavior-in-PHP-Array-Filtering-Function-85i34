```php
<?php
function my_function($arr) {
  if (empty($arr)) {
    return [];
  }

  $result = [];
  foreach ($arr as $value) {
    if (is_string($value) || is_null($value)) {
      $result[] = $value;
    }
  }
  return $result;
}

$my_array = [1, 2, "hello", 4, "world", null];
echo "<pre>";
print_r(my_function($my_array));
echo "</pre>";
?>
```
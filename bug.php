```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a']; //Incorrect data type
$sum = calculateSum($numbers);
echo "Sum: " . $sum; //Notice: A non well formed numeric value encountered
```
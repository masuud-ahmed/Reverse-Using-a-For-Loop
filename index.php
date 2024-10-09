<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse a Number Using a For Loop</title>
</head>
<body>
    <?php
   $num = 12345;
   $reverse = 0;
   $temp = $num;

   // Determine the number of digits
   $count = 0;
   for ($i = $temp; $i > 0; $i = (int)($i / 10)) {
       $count++;
   }

   // Reverse the number using a for loop
   for ($i = 0; $i < $count; $i++) {
       $remainder = $temp % 10; // Get the last digit
       $reverse = ($reverse * 10) + $remainder; // Build the reversed number
       $temp = (int)($temp / 10); // Remove the last digit from temp
   }

   echo "The reversed number is: $reverse";
    ?>
</body>
</html>
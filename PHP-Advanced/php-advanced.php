<?php

// d - Represents the day of the month (01 to 31)
// m - Represents a month (01 to 12)
// Y - Represents a year (in four digits)
// l (lowercase 'L') - Represents the day of the week


echo "Today is " . date("Y/m/d") . "\n";
echo "Today is " . date("Y.m.d") . "\n";
echo "Today is " . date("Y-m-d") . "\n";
echo "Today is " . date("l") . "\n";

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

echo "The time global is " . date("h:i:sa") . "\n";

date_default_timezone_set("America/New_York");
echo "The time in newyork is " . date("h:i:sa") . "\n";

date_default_timezone_set("America/Lima");
echo "The time in Peru is " . date("h:i:sa") . "\n";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $d) . "\n";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "\n";

$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "\n";
  $startdate = strtotime("+1 week", $startdate);
}


$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July." . "\n";


?>
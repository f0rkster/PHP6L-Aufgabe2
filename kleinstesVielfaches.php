<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kleinstes gemeinsames Vielfaches</title>
</head>
<body>
<?php
function lcm($input1, $input2)
{
    $value1 = $input1;
    $value2 = $input2;

    while ($value1 != $value2)
    {
        if ($value1 < $value2)
        {
            $value1 += $input1;
        }
        elseif ($value2 < $value1)
        {
            $value2 += $input2;
        }
    }
    return $value1;
}

function lcmRange($start, $end)
{
    if ($start+1 == $end)
    {
        $return = lcm($start, $end);
    }
    else
    {
        $return = lcm($start,lcmRange($start+1, $end));
    }

    //$return = lcm(2+0,lcm(2+1,lcm(2+2,5)));
    return $return;
}


$start = 1;
$end = 20;
$lcm = lcm($start, $end);
$lcmRange = lcmRange($start, $end);

print "start = "    .$start."<br>";
print "end = "      .$end."<br>";
print "lcm = "      .$lcm."<br>";
print "lcmRange = " .$lcmRange."<br>";
?>
</body>
</html>
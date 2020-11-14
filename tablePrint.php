<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontrollstrukturen und Schleifen</title>
</head>
<body>
<?php
    // Eigene Funktion mit Parmetern
    function printTable($content, $borderIsVisible = true)
    {
        $border = $borderIsVisible ? 'border="1"' : '';
        $html = '<table '.$border.'>';
        for($row = 0; $row < count($content); ++$row)
        {
            $html .= '<tr>';
            for($col = 0; $col < count($content[0]) ; ++$col)
            {
                $html .= '<td>';
                if (count($content[$row]) > count($content[0]))
                {
                    $html = 'Invalid Array';
                    break;
                }
                $html .= isset($content[$row][$col]) ? $content[$row][$col] : '---';
                $html .= '</td>';
            }
            $html .= '</tr>';
        }
        $html .= '</table>';
        echo $html;
    }
$myArray1 = array(
    array('Name','Alter','Ort'),
    array('Matthias', 26, 'Erfurt'),
    array('Julian', 21, 'Weimar')
);
$myArray2 = array(
    array('Name','Alter','Ort'),
    array('Matthias', 26),
    array('Julian', 21, 'Weimar')
);
$myArray3 = array(
    array('Name','Alter','Ort'),
    array('Matthias', 26, 'Erfurt'),
    array('Julian', 21, 'Weimar', 'Erfurt')
);
    echo '<h4>Eigene Funktion printTable</h4>';

    printTable($myArray1);
    echo'<br>';
    printTable($myArray2);
    echo'<br>';
    printTable($myArray3);
    echo'<br>';
?>
</body>
</html>
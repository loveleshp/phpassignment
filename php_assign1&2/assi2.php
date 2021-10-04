<?php
$array = array(
    array(
        array(1,2),
        array(1,3),
        array(
          array(3, 4),
          array(3, 4),
           array(
          array(3, 4),
          array(3, 4),
        ),
        ),
    ),
    array(
        array(5, 6),
        array(7, 8),
    ),
);
function array_depth(array $array) {
    $max_depth = 1;

    foreach ($array as $value) {
        if (is_array($value)) {
            $depth = array_depth($value) + 1;

            if ($depth > $max_depth) {
                $max_depth = $depth;
            };
        };
    };

    return $max_depth;
        };
    echo "array_depth"($array);

?>
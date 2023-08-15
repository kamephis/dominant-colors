<?php

function getColorName($r, $g, $b): string
{
    $colors = [
        'aliceblue' => [240, 248, 255],
        'antiquewhite' => [250, 235, 215],
        'aqua' => [0, 255, 255],
        'aquamarine' => [127, 255, 212],
        'azure' => [240, 255, 255],
        'beige' => [245, 245, 220],
        'bisque' => [255, 228, 196],
        'black' => [0, 0, 0],
        'blanchedalmond' => [255, 235, 205],
        'blue' => [0, 0, 255],
        'blueviolet' => [138, 43, 226],
        'brown' => [165, 42, 42],
        'burlywood' => [222, 184, 135],
        'cadetblue' => [95, 158, 160],
        'chartreuse' => [127, 255, 0],
        'chocolate' => [210, 105, 30],
        'coral' => [255, 127, 80],
        'cornflowerblue' => [100, 149, 237],
        'cornsilk' => [255, 248, 220],
        'crimson' => [220, 20, 60],
        'cyan' => [0, 255, 255],
        'darkblue' => [0, 0, 139],
        'darkcyan' => [0, 139, 139],
        'darkgoldenrod' => [184, 134, 11],
        'darkgray' => [169, 169, 169],
        'darkgreen' => [0, 100, 0],
        'darkkhaki' => [189, 183, 107],
        'darkmagenta' => [139, 0, 139],
        'darkolivegreen' => [85, 107, 47],
        'darkorange' => [255, 140, 0],
        'darkorchid' => [153, 50, 204],
        'darkred' => [139, 0, 0],
        'darksalmon' => [233, 150, 122],
        'darkseagreen' => [143, 188, 143],
        'darkslateblue' => [72, 61, 139],
        'darkslategray' => [47, 79, 79],
        'darkturquoise' => [0, 206, 209],
        'darkviolet' => [148, 0, 211],
        'deeppink' => [255, 20, 147],
        'deepskyblue' => [0, 191, 255],
        'dimgray' => [105, 105, 105],
        'dodgerblue' => [30, 144, 255],
        'firebrick' => [178, 34, 34],
        'floralwhite' => [255, 250, 240],
        'forestgreen' => [34, 139, 34],
        'fuchsia' => [255, 0, 255],
        'gainsboro' => [220, 220, 220],
        'ghostwhite' => [248, 248, 255],
        'gold' => [255, 215, 0],
        'goldenrod' => [218, 165, 32],
        'gray' => [128, 128, 128],
        'green' => [0, 128, 0],
        'greenyellow' => [173, 255, 47],
        'honeydew' => [240, 255, 240],
        'hotpink' => [255, 105, 180],
        'indianred' => [205, 92, 92],
        'indigo' => [75, 0, 130],
        'ivory' => [255, 255, 240],
        'khaki' => [240, 230, 140],
        'lavender' => [230, 230, 250],
        'lavenderblush' => [255, 240, 245],
        'lawngreen' => [124, 252, 0],
        'lemonchiffon' => [255, 250, 205],
        'lightblue' => [173, 216, 230],
        'lightcoral' => [240, 128, 128],
        'lightcyan' => [224, 255, 255],
        'lightgoldenrodyellow' => [250, 250, 210],
        'lightgray' => [211, 211, 211],
        'lightgreen' => [144, 238, 144],
        'lightpink' => [255, 182, 193],
        'lightsalmon' => [255, 160, 122],
        'lightseagreen' => [32, 178, 170],
        'lightskyblue' => [135, 206, 250],
        'lightslategray' => [119, 136, 153],
        'lightsteelblue' => [176, 224, 230],
        'lightyellow' => [255, 255, 224],
        'lime' => [0, 255, 0],
        'limegreen' => [50, 205, 50],
        'linen' => [250, 240, 230],
        'magenta' => [255, 0, 255],
        'maroon' => [128, 0, 0],
        'mediumaquamarine' => [102, 205, 170],
        'mediumblue' => [0, 0, 205],
        'mediumorchid' => [186, 85, 211],
        'mediumpurple' => [147, 112, 219],
        'mediumseagreen' => [60, 179, 113],
        'mediumslateblue' => [123, 104, 238],
        'mediumspringgreen' => [0, 250, 154],
        'mediumturquoise' => [72, 209, 204],
        'mediumvioletred' => [199, 21, 133],
        'midnightblue' => [25, 25, 112],
        'mintcream' => [245, 255, 250],
        'mistyrose' => [255, 228, 225],
        'moccasin' => [255, 228, 181],
        'navajowhite' => [255, 222, 173],
        'navy' => [0, 0, 128],
        'oldlace' => [253, 245, 230],
        'olive' => [128, 128, 0],
        'olivedrab' => [107, 142, 35],
        'orange' => [255, 165, 0],
        'orangered' => [255, 69, 0],
        'orchid' => [218, 112, 214],
        'palegoldenrod' => [238, 232, 170],
        'palegreen' => [152, 251, 152],
        'paleturquoise' => [175, 238, 238],
        'palevioletred' => [219, 112, 147],
        'papayawhip' => [255, 239, 213],
        'peachpuff' => [255, 218, 185],
        'peru' => [205, 133, 63],
        'pink' => [255, 192, 203],
        'plum' => [221, 160, 221],
        'powderblue' => [176, 224, 230],
        'purple' => [128, 0, 128],
        'rebeccapurple' => [102, 51, 153],
        'red' => [255, 0, 0],
        'rosybrown' => [188, 143, 143],
        'royalblue' => [65, 105, 225],
        'saddlebrown' => [139, 69, 19],
        'salmon' => [250, 128, 114],
        'sandybrown' => [244, 164, 96],
        'seagreen' => [46, 139, 87],
        'seashell' => [255, 245, 238],
        'sienna' => [160, 82, 45],
        'silver' => [192, 192, 192],
        'skyblue' => [135, 206, 235],
        'slateblue' => [106, 90, 205],
        'slategray' => [112, 128, 144],
        'snow' => [255, 250, 250],
        'springgreen' => [0, 255, 127],
        'steelblue' => [70, 130, 180],
        'tan' => [210, 180, 140],
        'teal' => [0, 128, 128],
        'thistle' => [216, 191, 216],
        'tomato' => [255, 99, 71],
        'turquoise' => [64, 224, 208],
        'violet' => [238, 130, 238],
        'wheat' => [245, 222, 179],
        'white' => [255, 255, 255],
        'whitesmoke' => [245, 245, 245],
        'yellow' => [255, 255, 0],
        'yellowgreen' => [154, 205, 50]
    ];

    $alternativeNames = [
        'aliceblue' => 'light blue',
        'antiquewhite' => 'vintage white',
        'aqua' => 'water blue',
        'aquamarine' => 'aqua',
        'azure' => 'sky blue',
        'beige' => 'sand',
        'bisque' => 'light peach',
        'blueviolet' => 'purple-blue',
        'burlywood' => 'wood brown',
        'cadetblue' => 'gray-blue',
        'chartreuse' => 'lime green',
        'chocolate' => 'chocolate brown',
        'coral' => 'coral pink',
        'cornflowerblue' => 'cornflower',
        'cornsilk' => 'pale yellow',
        'crimson' => 'dark red',
        'cyan' => 'bright blue',
        'darkblue' => 'navy blue',
        'darkcyan' => 'dark teal',
        'darkgoldenrod' => 'dark gold',
        'darkgray' => 'charcoal',
        'darkgreen' => 'forest green',
        'darkkhaki' => 'khaki',
        'darkmagenta' => 'dark purple',
        'darkolivegreen' => 'olive',
        'darkorange' => 'burnt orange',
        'darkorchid' => 'orchid',
        'darkred' => 'maroon',
        'darksalmon' => 'salmon',
        'darkseagreen' => 'sea green',
        'darkslateblue' => 'slate blue',
        'darkslategray' => 'slate gray',
        'darkturquoise' => 'turquoise',
        'darkviolet' => 'violet',
        'deeppink' => 'hot pink',
        'deepskyblue' => 'sky blue',
        'dimgray' => 'dim gray',
        'dodgerblue' => 'dodger blue',
        'firebrick' => 'brick red',
        'floralwhite' => 'floral white',
        'forestgreen' => 'dark green',
        'gainsboro' => 'light gray',
        'ghostwhite' => 'ghost white',
        'goldenrod' => 'golden',
        'greenyellow' => 'lime',
        'honeydew' => 'honeydew',
        'hotpink' => 'hot pink',
        'indianred' => 'brick red',
        'indigo' => 'indigo',
        'ivory' => 'ivory white',
        'khaki' => 'tan',
        'lavender' => 'lavender',
        'lavenderblush' => 'pale lavender',
        'lawngreen' => 'lawn green',
        'lemonchiffon' => 'lemon',
        'lightblue' => 'baby blue',
        'lightcoral' => 'coral',
        'lightcyan' => 'pale blue',
        'lightgoldenrodyellow' => 'light yellow',
        'lightgray' => 'light gray',
        'lightgreen' => 'lime green',
        'lightpink' => 'pink',
        'lightsalmon' => 'salmon pink',
        'lightseagreen' => 'sea green',
        'lightskyblue' => 'sky blue',
        'lightslategray' => 'slate',
        'lightsteelblue' => 'steel blue',
        'lightyellow' => 'pale yellow',
        'limegreen' => 'lime green',
        'linen' => 'linen white',
        'mediumaquamarine' => 'aquamarine',
        'mediumblue' => 'royal blue',
        'mediumorchid' => 'orchid',
        'mediumpurple' => 'purple',
        'mediumseagreen' => 'sea green',
        'mediumslateblue' => 'slate blue',
        'mediumspringgreen' => 'spring green',
        'mediumturquoise' => 'turquoise',
        'mediumvioletred' => 'violet red',
        'midnightblue' => 'dark blue',
        'mintcream' => 'mint',
        'mistyrose' => 'rose',
        'navajowhite' => 'navajo white',
        'oldlace' => 'vintage white',
        'olivedrab' => 'drab green',
        'orangered' => 'bright red',
        'palegoldenrod' => 'pale gold',
        'palegreen' => 'pale green',
        'paleturquoise' => 'turquoise',
        'palevioletred' => 'violet',
        'papayawhip' => 'papaya',
        'peachpuff' => 'peach',
        'peru' => 'brown',
        'powderblue' => 'blue',
        'rebeccapurple' => 'purple',
        // add more synonyms if you need to ;)
    ];

    $minDistance = PHP_INT_MAX;
    $closestColor = '';

    foreach ($colors as $name => $color) {
        $distance = sqrt(pow($r - $color[0], 2) + pow($g - $color[1], 2) + pow($b - $color[2], 2));
        if ($distance < $minDistance) {
            $minDistance = $distance;
            $closestColor = $name;
        }
    }

    return $alternativeNames[$closestColor] ?? $closestColor;
}

$imagePath = $argv[1];
try {
    $image = new Imagick($imagePath);
} catch (ImagickException $e) {
}
try {
    $image->scaleImage(150, 150);
} catch (ImagickException $e) {
}
try {
    $colors = $image->getImageHistogram();
} catch (ImagickException $e) {
}

$colorData = [];
$totalPixels = 0;
foreach ($colors as $color) {
    $count = $color->getColorCount();
    $colorData[] = [
        'color' => $color->getColor(),
        'count' => $count
    ];
    $totalPixels += $count;
}

usort($colorData, fn($a, $b) => $b['count'] - $a['count']);

// Group colors by their name and sum up their percentages
$groupedColors = [];
foreach ($colorData as $colorInfo) {
    $color = $colorInfo['color'];
    $name = getColorName($color['r'], $color['g'], $color['b']);
    $percentage = ($colorInfo['count'] / $totalPixels) * 100;

    if (!isset($groupedColors[$name])) {
        $groupedColors[$name] = [
            'color' => $color,
            'percentage' => 0
        ];
    }
    $groupedColors[$name]['percentage'] += $percentage;
}

// Sort the grouped colors by their total percentage
uasort($groupedColors, function ($a, $b) {
    return $b['percentage'] <=> $a['percentage'];
});

// Display the top 10 colors
$i = 0;
foreach ($groupedColors as $name => $colorInfo) {
    if ($i >= 10) break;

    $color = $colorInfo['color'];
    echo "Color: R=" . $color['r'] . ", G=" . $color['g'] . ", B=" . $color['b'] . " (" . $name . ") - " . number_format($colorInfo['percentage'], 2) . "%\n";
    $i++;
}

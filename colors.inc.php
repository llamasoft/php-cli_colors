<?php

define("CLEAR",  pack('H*', '1b5b481b5b324a00'));  // Same as system's CLEAR or CLS command
define("TXTBLK", "\033[0;30m"); // Black  - Regular
define("TXTRED", "\033[0;31m"); // Red    - Regular
define("TXTGRN", "\033[0;32m"); // Green  - Regular
define("TXTYLW", "\033[0;33m"); // Yellow - Regular
define("TXTBLU", "\033[0;34m"); // Blue   - Regular
define("TXTPUR", "\033[0;35m"); // Purple - Regular
define("TXTCYN", "\033[0;36m"); // Cyan   - Regular
define("TXTWHT", "\033[0;37m"); // White  - Regular
define("BLDBLK", "\033[1;30m"); // Black  - Bold
define("BLDRED", "\033[1;31m"); // Red    - Bold
define("BLDGRN", "\033[1;32m"); // Green  - Bold
define("BLDYLW", "\033[1;33m"); // Yellow - Bold
define("BLDBLU", "\033[1;34m"); // Blue   - Bold
define("BLDPUR", "\033[1;35m"); // Purple - Bold
define("BLDCYN", "\033[1;36m"); // Cyan   - Bold
define("BLDWHT", "\033[1;37m"); // White  - Bold
define("UNKBLK", "\033[4;30m"); // Black  - Underline
define("UNDRED", "\033[4;31m"); // Red    - Underline
define("UNDGRN", "\033[4;32m"); // Green  - Underline
define("UNDYLW", "\033[4;33m"); // Yellow - Underline
define("UNDBLU", "\033[4;34m"); // Blue   - Underline
define("UNDPUR", "\033[4;35m"); // Purple - Underline
define("UNDCYN", "\033[4;36m"); // Cyan   - Underline
define("UNDWHT", "\033[4;37m"); // White  - Underline
define("BAKBLK", "\033[40m"  ); // Black  - Background
define("BAKRED", "\033[41m"  ); // Red    - Background
define("BAKGRN", "\033[42m"  ); // Green  - Background
define("BAKYLW", "\033[43m"  ); // Yellow - Background
define("BAKBLU", "\033[44m"  ); // Blue   - Background
define("BAKPUR", "\033[45m"  ); // Purple - Background
define("BAKCYN", "\033[46m"  ); // Cyan   - Background
define("BAKWHT", "\033[47m"  ); // White  - Background
define("TXTRST", "\033[0m"   ); // Text Reset

define("TTLSET", "\033]0;"   ); // Set window title
define("TTLEND", "\007"      ); // End of title string


function white($txt) { return BLDWHT . $txt . TXTRST; }
function red($txt)   { return TXTRED . $txt . TXTRST; }
function green($txt) { return TXTGRN . $txt . TXTRST; }
function blue($txt)  { return TXTBLU . $txt . TXTRST; }

function setTitle($txt) { return TTLSET . $txt . TTLEND; }
function resizeTTY($rows, $cols) { return "\033[8;". intval($rows) .";". intval($cols) ."t"; }


// Display routine, change this to TRUE to sample the colors.
if (FALSE) {
    echo TXTBLK . "Black  - Regular   " . PHP_EOL;
    echo TXTRED . "Red    - Regular   " . PHP_EOL;
    echo TXTGRN . "Green  - Regular   " . PHP_EOL;
    echo TXTYLW . "Yellow - Regular   " . PHP_EOL;
    echo TXTBLU . "Blue   - Regular   " . PHP_EOL;
    echo TXTPUR . "Purple - Regular   " . PHP_EOL;
    echo TXTCYN . "Cyan   - Regular   " . PHP_EOL;
    echo TXTWHT . "White  - Regular   " . PHP_EOL;
    echo BLDBLK . "Black  - Bold      " . PHP_EOL;
    echo BLDRED . "Red    - Bold      " . PHP_EOL;
    echo BLDGRN . "Green  - Bold      " . PHP_EOL;
    echo BLDYLW . "Yellow - Bold      " . PHP_EOL;
    echo BLDBLU . "Blue   - Bold      " . PHP_EOL;
    echo BLDPUR . "Purple - Bold      " . PHP_EOL;
    echo BLDCYN . "Cyan   - Bold      " . PHP_EOL;
    echo BLDWHT . "White  - Bold      " . PHP_EOL;
    echo UNKBLK . "Black  - Underline " . PHP_EOL;
    echo UNDRED . "Red    - Underline " . PHP_EOL;
    echo UNDGRN . "Green  - Underline " . PHP_EOL;
    echo UNDYLW . "Yellow - Underline " . PHP_EOL;
    echo UNDBLU . "Blue   - Underline " . PHP_EOL;
    echo UNDPUR . "Purple - Underline " . PHP_EOL;
    echo UNDCYN . "Cyan   - Underline " . PHP_EOL;
    echo UNDWHT . "White  - Underline " . PHP_EOL;
    echo BAKBLK . "Black  - Background" . PHP_EOL;
    echo BAKRED . "Red    - Background" . PHP_EOL;
    echo BAKGRN . "Green  - Background" . PHP_EOL;
    echo BAKYLW . "Yellow - Background" . PHP_EOL;
    echo BAKBLU . "Blue   - Background" . PHP_EOL;
    echo BAKPUR . "Purple - Background" . PHP_EOL;
    echo BAKCYN . "Cyan   - Background" . PHP_EOL;
    echo BAKWHT . "White  - Background" . PHP_EOL;
    echo TXTRST;
}

?>
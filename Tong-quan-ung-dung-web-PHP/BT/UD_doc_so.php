
<?php
function doc_so($number){
    $hyphen      = ' ';
    $conjunction = '  ';
    $separator   = ' ';
    $negative    = 'negative ';
    $decimal     = ' point ';
    $dictionary  = array(
        0                 => 'zero',
        1                 => 'one',
        2                 =>'two',
        3                 =>'three',
        4                 =>'for',
        5                 =>'five',
        6                 =>'six',
        7                 =>'seven',
        8                 =>'eight',
        9                 =>'night',
        10                =>'ten',
        11                =>'eleven',
        12                => 'twelve',
        13                => 'thirteen',
        14                =>'fourteen',
        15                =>'fifteen',
        16                =>'sixteen',
        17                =>'seventen',
        18                =>'eigthteen',
        19                =>'nineteen',
        20                =>'twenty',
        30                =>'thirty',
        40                =>'fourty',
        50                =>'fifty',
        60                =>'sixty',
        70                =>'seventy',
        80                =>'eighty',
        90                =>'ninety',
        100                =>'hundred',
        1000                =>'thousand',
        1000000                =>'million',
        1000000000                =>'billion'
    );
    if (!is_numeric($number)){
        return false;
    }
    if (($number >= 0 && (int) $number < 0 )|| (int) $number < 0 - PHP_INT_MAX) {
        trigger_error(
            'doc_so only accepts numbers between-' . PHP_INT_MAX. ' and'. PHP_INT_MAX,
            E_USER_WARNING
        );
        return false;
    }
    if ($number < 0) {
        return $negative . doc_so(abs($number));
    }
    $string = $fraction = null;
    if (strpos($number, '.') !== false) {
        list($number, $fraction) = explode('.', $number);
    }
    switch (true) {
        case $number < 21:
            $string = $dictionary[$number];
            break;
        case $number < 100:
            $tens   = ((int) ($number / 10)) * 10;
            $units  = $number % 10;
            $string = $dictionary[$tens];
            if ($units) {
                $string .= $hyphen . $dictionary[$units];
            }
            break;
        case $number < 1000:
            $hundreds  = $number / 100;
            $remainder = $number % 100;
            $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
            if ($remainder) {
                $string .= $conjunction . doc_so($remainder);
            }
            break;
        default:
            $baseUnit = pow(1000, floor(log($number, 1000)));
            $numBaseUnits = (int) ($number / $baseUnit);
            $remainder = $number % $baseUnit;
            $string = doc_so($numBaseUnits) . ' ' . $dictionary[$baseUnit];
            if ($remainder) {
                $string .= $remainder < 100 ? $conjunction : $separator;
                $string .= doc_so($remainder);
            }
            break;
    }
    if (null !== $fraction && is_numeric($fraction)) {
        $string .= $decimal;
        $words = array();
        foreach (str_split((string) $fraction) as $number) {
            $words[] = $dictionary[$number];
        }
        $string .= implode(' ', $words);
    }
    return $string;
}
echo '<b>'.doc_so(154642545).'</b>';
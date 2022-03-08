<?php
class Theme
{
    const month_table = array(
        "01" => "一",
        "02" => "二",
        "03" => "三",
        "04" => "四",
        "05" => "五",
        "06" => "六",
        "07" => "七",
        "08" => "八",
        "09" => "九",
        "10" => "十",
        "11" => "十一",
        "12" => "十二",
    );
    public static function convert_date_string(string $date = "y-m-d")
    {
        $s1 = strpos($date, "-");
        $s2 = strrpos($date, "-");
        $year = substr($date, 0, $s1);
        $month = substr($date, $s1 + 1, $s2 - $s1 - 1);
        $day = substr($date, $s2 + 1, strlen($date) - 1);
        if (ord($day) == 48) {
            $day = substr($day, 1, 1);
        }
        return self::month_table[$month] . "月 " . $day . " ，" . $year;
    }
}

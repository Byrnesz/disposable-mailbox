<?php

// locale: arabic (tn)
// author: Tarek Morgéne https://www.satoripop.com/

return array(
    "months"        => explode('_', 'جانفي_فيفري_مارس_أفريل_ماي_جوان_جويلية_أوت_سبتمبر_أكتوبر_نوفمبر_ديسمبر'),
    "monthsShort"   => explode('_', 'جانفي_فيفري_مارس_أفريل_ماي_جوان_جويلية_أوت_سبتمبر_أكتوبر_نوفمبر_ديسمبر'),
    "weekdays"      => explode('_', 'الأحد_الإثنين_الثلاثاء_الأربعاء_الخميس_الجمعة_السبت'),
    "weekdaysShort" => explode('_', 'أحد_إثنين_ثلاثاء_أربعاء_خميس_جمعة_سبت'),
    "calendar"      => array(
        "sameDay"  => '[اليوم]',
        "nextDay"  => '[غدا ]',
        "lastDay"  => '[أمس ]',
        "lastWeek" => 'l [الماضي]',
        "sameElse" => 'l',
        "withTime" => '[على الساعة] H:i',
        "default"  => 'd/m/Y',
    ),
    "relativeTime"  => array(
        "future" => 'في  %s',
        "past"   => 'منذ %s',
        "s"      => 'ثوان',
        "m"      => 'دقيقة',
        "mm"     => '%d دقائق',
        "h"      => 'ساعة',
        "hh"     => '%d ساعات',
        "d"      => 'يوم',
        "dd"     => '%d أيام',
        "M"      => 'شهر',
        "MM"     => '%d أشهر',
        "y"      => 'سنة',
        "yy"     => '%d سنوات',
    ),
    "ordinal"       => function ($number)
    {
        return $number . ($number === 1 ? '[er]' : '');
    },
    "week"          => array(
        "dow" => 1, // Monday is the first day of the week.
        "doy" => 4  // The week that contains Jan 4th is the first week of the year.
    ),
);

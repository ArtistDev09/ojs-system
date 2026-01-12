<?php
namespace PHP81_BC;

use DateTime;
use DateTimeZone;
use DateTimeInterface;
use Exception;
use IntlDateFormatter;
use IntlGregorianCalendar;
use InvalidArgumentException;

function strftime(string $format, $timestamp = null, ?string $locale = null): string {
    $locale = $locale ?? (\class_exists('\AppLocale') ? \AppLocale::getLocale() : 'en_US');

    if ($timestamp === null) {
        $timestamp = new DateTime(); // default to now
    } elseif (!($timestamp instanceof DateTimeInterface)) {
        $timestamp = is_int($timestamp) ? '@' . $timestamp : (string)$timestamp;
        try {
            $timestamp = new DateTime($timestamp);
        } catch (Exception $e) {
            // fallback to now if invalid
            $timestamp = new DateTime();
        }
    }

    $timestamp->setTimezone(new DateTimeZone(date_default_timezone_get()));

    if (empty($locale)) {
        $locale = 'en_US';
    }
    $locale = preg_replace('/[^\w-].*$/', '', $locale);

    // simple safe replacement for common formats
    $formats = [
        '%Y' => 'Y', '%m' => 'm', '%d' => 'd', '%H' => 'H', '%M' => 'i', '%S' => 's'
    ];

    foreach ($formats as $k => $v) {
        $format = str_replace($k, $timestamp->format($v), $format);
    }

    return $format;
}

// GLOBAL override
if (!function_exists('strftime')) {
    function strftime($format, $timestamp = null) {
        return \PHP81_BC\strftime($format, $timestamp);
    }
}

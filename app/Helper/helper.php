<?php

use Carbon\Carbon;

if (!function_exists('formatDate')) {
    /**
     * Helper function to format date or return null if invalid
     */
    function formatDate($date)
    {
        if (!$date) {
            return null;
        }

        // ตรวจสอบหลายรูปแบบวันที่
        $formats = ['d/m/Y', 'd-m-Y', 'Y-m-d'];

        foreach ($formats as $format) {
            if (Carbon::hasFormat($date, $format)) {
                return Carbon::createFromFormat($format, $date)->format('Y-m-d');
            }
        }

        return null;
    }
}

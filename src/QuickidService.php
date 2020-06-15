<?php
namespace Advancedideasmechanics\Quickid;

class QuickidService implements QuickidServiceInterface {

    public function getId($length)
    {
        /*
         * $length tells how long the new shortened URL will be
         * Each Character can be one of 62 characters a-zA-Z0-9
         * Length of 3 character can generate 238,328 unique
         * Length of 4 character can generate 4,776,336 unique
         * 62*62*62 = 238,328
         */
        $length = isset($length) && (int)$length > 3 ? $length : 3;

            $start = 0;

            $lowerCase = 'abcdefghijklmnopqrstuvwxyz';
            $upperCase = strtoupper($lowerCase);
            $numbers = '0123456789';

            $characterMap = $lowerCase . $upperCase . $numbers;
            $returnRandom = [];

            for ($start; $start < $length; $start++) {
                $returnRandom[$start] = $characterMap[mt_rand(0, strlen($characterMap) - 1)];
            }

            return implode($returnRandom);
        }
}
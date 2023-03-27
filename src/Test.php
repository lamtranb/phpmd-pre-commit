<?php

namespace App;

class Test
{
    /**
     * @param  string   $string1
     * @param  string   $string2
     * @return int|null
     */
    public function abc($a, $b): ?string
    {
        $b = [
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
            'test',
        ];
        if (function_exists('normalizer_normalize')) {
            $a = normalizer_normalize($a);
        }
        if (null === $a) {
            $a = '1';
        }
        if ($a == '1') {
            return '1';
        } else {
            return '2';
        }
    }
}

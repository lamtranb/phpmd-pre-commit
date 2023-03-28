<?php

namespace App;

class Test
{
    private $test1;
    private $test2;
    private $test3;
    private $test4;
    private $test5;
    private $test6;
    private $test7;
    private $test8;
    private $test9;
    private $test10;

    public function __construct($test1, $test2, $test3, $test4)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
        $this->test3 = $test3;
        $this->test4 = $test4;
    }

    public function setTest5($test5)
    {
        $this->test5 = $test5;
    }

    public function setTest6($test6)
    {
        $this->test6 = $test6;
    }

    public function setTest7($test7)
    {
        $this->test7 = $test7;
    }

    public function setTest8($test8)
    {
        $this->test8 = $test8;
    }

    public function setTest9($test9)
    {
        $this->test9 = $test9;
    }

    public function setTest10($test10)
    {
        $this->test10 = $test10;
    }

    public function getData()
    {
        return [
            $this->test1,
            $this->test2,
            $this->test3,
            $this->test4,
            $this->test5,
            $this->test6,
            $this->test7,
            $this->test8,
            $this->test9,
            $this->test10,
        ];
    }

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

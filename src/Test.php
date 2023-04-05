<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace App;

class Test
{
    /**
     * @var Interface1
     */
    private $test1;

    /**
     * @var Interface2
     */
    private $test2;

    /**
     * @var Interface3
     */
    private $test3;

    /**
     * @var Interface4
     */
    private $test4;

    public function __construct(Interface1 $test1, Interface2 $test2, Interface3 $test3, Interface4 $test4)
    {
        $this->test1 = $test1;
        $this->test2 = $test2;
        $this->test3 = $test3;
        $this->test4 = $test4;
    }

    public function getData()
    {
        return [
            $this->test1,
            $this->test2,
            $this->test3,
            $this->test4,
        ];
    }

    /**
     * @param string $string1
     * @param string $string2
     * @param mixed  $a
     * @param mixed  $b
     *
     * @return null|int
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
        if (\function_exists('normalizer_normalize')) {
            $a = normalizer_normalize($a);
        }

        if (null === $a) {
            $a = '1';
        }
        if ('1' === $a) {
            return '1';
        }

        return '2';
    }
}

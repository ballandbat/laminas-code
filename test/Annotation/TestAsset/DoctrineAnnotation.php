<?php

/**
 * @see       https://github.com/laminas/laminas-code for the canonical source repository
 * @copyright https://github.com/laminas/laminas-code/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-code/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Code\Annotation\TestAsset;

/**
 * @Annotation
 */
class DoctrineAnnotation
{
    public $value;

    public function __construct(array $value)
    {
        $this->value = $value;
    }
}

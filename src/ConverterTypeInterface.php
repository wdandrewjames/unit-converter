<?php

declare(strict_types = 1);

namespace Converter;

/**
 * This file is part of the wdandrewjames/unit-converter PHP package.
 *
 * @copyright 2020 Andrew Rushton
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Converter;

interface ConverterTypeInterface
{
    public function getConversionType();
}
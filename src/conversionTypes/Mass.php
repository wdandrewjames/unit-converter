<?php

declare(strict_types = 1);

/**
 * This file is part of the wdandrewjames/unit-converter PHP package.
 *
 * @copyright 2020 Andrew Rushton
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Converter\ConversionTypes;

use Converter\ConverterTypeInterface;

class Mass implements ConverterTypeInterface
{
    /**
     * The International System unit for mass
     *
     * @var string $baseUnit
     */
    public $baseUnit = 'KILOGRAM';

    /**
     * Units and their values against International System unit
     *
     * @var array $dataTable
     */
    public $dataTable = [
        'MICROGRAM'  => 1e-7,
        'MILLIGRAM'  => 1e-6,
        'GRAM'       => 0.001,
        'KILOGRAM'   => 1,
        'METRIC_TON' => 100,
        'OUNCE'      => 0.0283495,
        'POUND'      => 0.453592,
        'STONE'      => 6.35029,
        'SHORT_TON'  => 907.185,
        'LONG_TON'   => 1016.0469088,
    ];

    /**
     * returns the conversion quantity type
     * @return string
     */
    public function getConversionType()
    {
        return 'Mass';
    }
}
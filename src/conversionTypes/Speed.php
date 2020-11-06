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

class Speed implements ConverterTypeInterface
{
    /**
     * The International System unit for speed
     *
     * @var string $baseUnit
     */
    public $baseUnit = 'METRE_PER_SECOND';

    /**
     * Units and their values against International System unit
     *
     * @var array $dataTable
     */
    public $dataTable = [
        'METRE_PER_SECOND'    => 1,
        'KILOMETRES_PER_HOUR' => 0.277778,
        'FEET_PER_SECOND'     => 0.3048,
        'MILES_PER_HOUR'      => 0.44704,
        'KNOT'                => 0.514444,
    ];

    /**
     * returns the conversion quantity type
     * @return string
     */
    public function getConversionType()
    {
        return 'Speed';
    }
}
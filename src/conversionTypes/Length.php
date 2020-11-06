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

class Length implements ConverterTypeInterface
{
    /**
     * The International System unit for length
     *
     * @var string $baseUnit
     */
    public $baseUnit = 'METRE';

    /**
     * Units and their values against International System unit
     *
     * @var array $dataTable
     */
    public $dataTable = [
        'MILLIMETRE'    => 0.001,
        'CENTIMETRE'    => 0.01,
        'METRE'         => 1,
        'KILOMETRE'     => 1000,
        'INCH'          => 0.0254,
        'FOOT'          => 0.3048,
        'YARD'          => 0.9144,
        'MILE'          => 1609.34,
        'NAUTICAL_MILE' => 1852,
    ];

    /**
     * returns the conversion quantity type
     * @return string
     */
    public function getConversionType()
    {
        return 'Length';
    }
}
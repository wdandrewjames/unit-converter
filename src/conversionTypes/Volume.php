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

class Volume implements ConverterTypeInterface
{
    /**
     * The International System unit for volume
     *
     * @var string $baseUnit
     */
    public $baseUnit = 'CUBIC_METRE';

    /**
     * Units and their values against International System unit
     *
     * @var array $dataTable
     */
    public $dataTable = [
        'MILLILITRE'    => 1e-6,
        'LITRE'         => 0.001,
        'CUBIC_METRE'   => 1,
        'GALLON'        => 0.00454609,
        'QUART'         => 0.00113652,
        'PINT'          => 0.000568261,
        'TABLESPOON'    => 1.7758e-5,
        'TEASPOON'      => 5.9194e-6,
        'US_GALLON'     => 0.00378541,
        'US_QUART'      => 0.000946353,
        'US_PINT'       => 0.000473176,
        'US_CUP'        => 0.000236588,
        'US_OUNCE'      => 2.9574e-5,
        'US_TABLESPOON' => 1.4787e-5,
        'US_TEASPOON'   => 4.9289e-6,
        'CUBIC_INCH'    => 1.6387e-5,
        'CUBIC_FOOT'    => 0.0283168,
    ];

    /**
     * returns the conversion quantity type
     * @return string
     */
    public function getConversionType()
    {
        return 'Volume';
    }
}
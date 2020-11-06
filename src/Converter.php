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

namespace Converter;

use Exception;

class Converter
{
    /**
     * The multiple of base unit
     *
     * @var float $conversionMultiple
     */
    public $conversionMultiple;
    
    /**
     * The result of the conversion.
     *
     * @var float|int $conversion
     */
    public $conversion;
    
    /**
     * The type of conversion e.g. mass.
     *
     * @var converterType $converterType
     */
    public $converterType;

    /**
     * The unit to convert to.
     *
     * @var string $to
     */
    public $to;

    /**
     * Sets the conversion type
     * @param ConverterTypeInterface $converterType
     */
    public function __construct(ConverterTypeInterface $converterType)
    {
        $this->converterType = $converterType;
    }

    /**
     * Calculates the conversion from the conversion multiple to the $to unit.
     * @param float $value The value to be converted from
     * @param string $unit The unit that is being converted
     * @return float
     */
    private function calculate(): float
    {
        return $this->conversionMultiple / $this->getUnitValue($this->to);
    }

    /**
     * Checks the provided unit is valid by checking if it exists and that it is numeric
     * @param string $unit
     * @return bool
     */
    private function checkUnitValueIsValid(string $unit): bool
    {
        if (! is_null($this->converterType->dataTable[strtoupper($unit)]) && is_numeric($this->converterType->dataTable[strtoupper($unit)])) {
            return true;
        }
        return false;
    }

    /**
     * returns Converter after setting conversion multiple
     * @param float $value The value to be converted from
     * @param string $unit The unit that is being converted (Abbreviated e.g. kg, lbs)
     * @return Converter
     */
    public function convert(float $value, string $unit): Converter
    {
        $this->setConversionMultiple($value, $unit);
        
        return $this;
    }

    /**
     * Returns all available units for current converion type
     * @return array
     */
    public function getAvailableUnits(): array
    {   
        return array_keys($this->converterType->dataTable);
    }

    /**
     * Checks the value for a given unit
     * @param string $unit
     * @return float
     */
    private function getUnitValue(string $unit): float
    {
        if ($this->checkUnitValueIsValid($unit)) {
            return $this->converterType->dataTable[strtoupper($unit)];
        }
        
        throw new Exception("Unit is not vaid");
    }

    /**
     * Sets conversion multiple of based unit based on the International System of Units
     * @param float $value The value to be converted from
     * @param string $unit The unit that is being converted (Abbreviated e.g. kg, lbs)
     * @return void
     */
    private function setConversionMultiple($value, $unit): void
    {
        $this->checkUnitValueIsValid($unit);
        $this->conversionMultiple = $value * $this->getUnitValue($unit);
    }

    /**
     * Returns the result of the conversion
     * @param string $unit The unit that the value is being converted to.
     * @return float
     */
    public function to(string $unit): float
    {
        $this->checkUnitValueIsValid($unit);
        $this->to = $unit;
        return $this->calculate();
    }
}
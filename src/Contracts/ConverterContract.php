<?php
declare(strict_types=1);

namespace Taxionus\ResponseBuilder\Contracts;

/**
 * Laravel API Response Builder
 *
 * @package   Taxionus\ResponseBuilder
 *
 * @author    Ahamed Riham <mail (#) riham.dev (.) com>
 * @copyright 2016-2022 Ahamed Riham
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://github.com/MarcinOrlowski/laravel-api-response-builder
 */
interface ConverterContract
{
    /**
     * Returns array representation of the object.
     *
     * @param object $obj    Object to be converted
     * @param array  $config Converter config array to be used for this object (based on exact class
     *                       name match or inheritance).
     *
     * @return array
     */
    public function convert(object $obj, array $config): array;
}

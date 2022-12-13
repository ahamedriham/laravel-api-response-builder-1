<?php
declare(strict_types=1);

namespace Taxionus\ResponseBuilder\Exceptions;

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
final class MissingConfigurationKeyException extends ConfigurationException
{
	/**
	 * MissingConfigurationKeyException constructor.
	 *
	 * @param string $var_name
	 */
	public function __construct($var_name)
	{
		parent::__construct(sprintf('Missing "%s" key.', $var_name));
	}
}

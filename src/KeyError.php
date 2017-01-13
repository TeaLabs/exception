<?php
namespace Tea\Exceptions;

use Exception;
use Tea\Exceptions\Utils\Helpers;

class KeyError extends Exception
{
	/**
	 * Create a new KeyError exception for when a key does not exist.
	 *
	 * @param  string         $key
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function create($key, $object, $message = "Key doesn't exist.")
	{
		$type = Helpers::type($object);
		return new static("Key `{$key}` in `{$type}`. {$message}");
	}

	/**
	 * Create a new KeyError exception for when a key is of an ivalid type.
	 *
	 * @param  string         $key
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function invalid($key, $object, $message = "Key is invalid.")
	{
		$type = Helpers::type($object);
		$keyType = Helpers::type($type);
		return new static("Key [{$keyType}] `{$key}` in `{$type}`. {$message}");
	}
}
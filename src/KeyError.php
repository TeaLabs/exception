<?php
namespace Tea\Exception;

use Exception;

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
		$type = is_object($object) ? get_class($object) : (is_string($object) ? $object: gettype($object));
		return new static("Key `{$key}` in `{$type}`. {$message}");
	}
}
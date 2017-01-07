<?php
namespace Tea\Exceptions;

use Exception;

class PropertyError extends Exception
{
	/**
	 * Create a new PropertyError exception for when a property can't be accessed.
	 *
	 * @param  string         $property
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function accessError($property, $object, $message = "Not allowed.")
	{
		$type = is_object($object) ? get_class($object) : $object;
		return new static("Error accessing property `{$property}` in object `{$type}`. {$message}");
	}

	/**
	 * Create a new PropertyError exception for when a property whose access is
	 * not allowed. Alias for {@see \Tea\Exceptions\PropertyError::accessError()}
	 *
	 * @uses \Tea\Exceptions\PropertyError::accessError()
	 *
	 * @param  string         $property
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function accessNotAllowed($property, $object, $message = "Not allowed.")
	{
		return static::accessError($property, $object, $message);
	}

	/**
	 * Create a new PropertyError exception for when a property is not found.
	 *
	 * @param  string         $property
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function notFound($property, $object, $message = "Property does not exist.")
	{
		return static::accessError($property, $object, $message);
	}

	/**
	 * Create a new PropertyError exception for when a property can't be set.
	 *
	 * @param  string         $property
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function setError($property, $object, $message = "Not allowed.")
	{
		$type = is_object($object) ? get_class($object) : $object;
		return new static("Error setting property `{$property}` in object `{$type}`. {$message}");
	}

	/**
	 * Create a new PropertyError exception for when a property can't be set.
	 * Alias for {@see \Tea\Exceptions\PropertyError::setError()}
	 *
	 * @uses \Tea\Exceptions\PropertyError::setError()
	 *
	 * @param  string         $property
	 * @param  object|string  $object
	 * @param  string         $message
	 * @return static
	 */
	public static function setNotAllowed($property, $object, $message = "Not allowed.")
	{
		return static::setError($property, $object, $message);
	}
}
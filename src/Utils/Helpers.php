<?php
namespace Tea\Exceptions\Utils;


class Helpers
{
	public static function type($value)
	{
		return is_object($value) ? get_class($value) : gettype($value);
	}
}
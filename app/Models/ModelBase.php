<?php
namespace App\Models;

abstract class ModelBase
{
	/**
	 * デバッグログを出力
	 * @param mixed $value
	 * @param boolean $isPre
	 */
	public static function __dump($value, $isPre = false)
	{
		if ($isPre) var_dump("<pre>");
		var_dump($value);
		if ($isPre) var_dump("</pre>");
	}
}
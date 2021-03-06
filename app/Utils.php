<?php

namespace App;

/**
 * Utils class.
 *
 * @copyright YetiForce Sp. z o.o
 * @license   YetiForce Public License 3.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Utils
{
	/**
	 * Function to capture the initial letters of words.
	 *
	 * @param string $name
	 *
	 * @return string
	 */
	public static function getInitials(string $name): string
	{
		preg_match_all('#(?<=\s|\b)\pL|[()]#u', $name, $initial);
		return isset($initial[0]) ? implode('', $initial[0]) : '';
	}

	/**
	 * Outputs or returns a parsable string representation of a variable.
	 *
	 * @see http://php.net/manual/en/function.var-export.php
	 *
	 * @param mixed $variable
	 *
	 * @return mixed the variable representation when the <i>return</i>
	 */
	public static function varExport($variable)
	{
		if (\is_array($variable)) {
			$toImplode = [];
			if (static::isAssoc($variable)) {
				foreach ($variable as $key => $value) {
					$toImplode[] = var_export($key, true) . '=>' . static::varExport($value);
				}
			} else {
				foreach ($variable as $value) {
					$toImplode[] = static::varExport($value);
				}
			}

			return '[' . implode(',', $toImplode) . ']';
		}
		return var_export($variable, true);
	}

	/**
	 * Check if array is associative.
	 *
	 * @param array $arr
	 *
	 * @return bool
	 */
	public static function isAssoc(array $arr)
	{
		if (empty($arr)) {
			return false;
		}
		return array_keys($arr) !== range(0, \count($arr) - 1);
	}

	/**
	 * Flatten a multi-dimensional array into a single level.
	 *
	 * @param array $array
	 * @param int   $depth
	 *
	 * @return array
	 */
	public static function flatten($array, $depth = INF)
	{
		$result = [];
		foreach ($array as $item) {
			if (!\is_array($item)) {
				$result[] = $item;
			} else {
				$values = 1 === $depth ? array_values($item) : static::flatten($item, $depth - 1);
				foreach ($values as $value) {
					$result[] = $value;
				}
			}
		}
		return $result;
	}

	/**
	 * Convert string from encoding to encoding.
	 *
	 * @param string $value
	 * @param string $fromCharset
	 * @param string $toCharset
	 *
	 * @return string
	 */
	public static function convertCharacterEncoding($value, $fromCharset, $toCharset)
	{
		if (\function_exists('mb_convert_encoding') && \function_exists('mb_list_encodings') && \in_array($fromCharset, mb_list_encodings()) && \in_array($toCharset, mb_list_encodings())) {
			$value = mb_convert_encoding($value, $toCharset, $fromCharset);
		} else {
			$value = iconv($fromCharset, $toCharset, $value);
		}
		return $value;
	}

	/**
	 * Function to check is a html message.
	 *
	 * @param string $content
	 *
	 * @return bool
	 */
	public static function isHtml(string $content): bool
	{
		$content = trim($content);
		if ('<' === substr($content, 0, 1) && '>' === substr($content, -1)) {
			return true;
		}
		return $content != strip_tags($content);
	}

	/**
	 * Strip tags content.
	 *
	 * @param string $content
	 *
	 * @return string
	 */
	public static function htmlToText(string $content): string
	{
		return trim(preg_replace('/[ \t\n]+/', ' ', strip_tags($content)));
	}

	/**
	 * Function to save php file with cleaning file cache.
	 *
	 * @param string       $pathDirectory
	 * @param array|string $content
	 * @param string       $comment
	 * @param int          $flag
	 * @param bool         $return
	 *
	 * @return bool $value
	 */
	public static function saveToFile(string $pathDirectory, $content, string $comment = '', int $flag = 0, bool $return = false): bool
	{
		if (\is_array($content)) {
			$content = self::varExport($content);
		}
		if ($return) {
			$content = "return $content;";
		}
		if ($comment) {
			$content = "<?php /**\n{$comment}\n*/\n{$content}\n";
		} else {
			$content = "<?php $content" . PHP_EOL;
		}
		if (false !== $value = file_put_contents($pathDirectory, $content, $flag)) {
			Cache::resetFileCache($pathDirectory);
		}
		return (bool) $value;
	}

	/**
	 * Replacement for the ucfirst function for proper Multibyte String operation.
	 * Delete function will exist as mb_ucfirst.
	 *
	 * @param string $string
	 *
	 * @return string
	 */
	public static function mbUcfirst($string)
	{
		return mb_strtoupper(mb_substr($string, 0, 1)) . mb_substr($string, 1);
	}

	/**
	 * Sanitize special chars from given string
	 *
	 * @param string $string
	 * @param string $delimiter
	 *
	 * @return string
	 */
	public static function sanitizeSpecialChars(string $string, string $delimiter = '_'): string
	{
		$string = mb_convert_encoding((string) $string, 'UTF-8', mb_list_encodings());
		$replace = [
			'??' => '-', '??' => '-', '??' => '-', '??' => '-',
			'??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'A', '??' => 'Ae',
			'??' => 'B', '??' => 'C', '??' => 'C', '??' => 'C', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E', '??' => 'E',
			'??' => 'G', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'I', '??' => 'L', '??' => 'N', '??' => 'N',
			'??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'O', '??' => 'Oe', '??' => 'S', '??' => 'S', '??' => 'S',
			'??' => 'S', '??' => 'T', '??' => 'U', '??' => 'U', '??' => 'U', '??' => 'Ue', '??' => 'Y', '??' => 'Z', '??' => 'Z',
			'??' => 'Z', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a',
			'??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'a', '??' => 'ae',
			'??' => 'ae', '??' => 'ae', '??' => 'ae',	'??' => 'b', '??' => 'b', '??' => 'b', '??' => 'b',	'??' => 'c', '??' => 'c',
			'??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c', '??' => 'c',
			'??' => 'ch', '??' => 'ch', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'd', '??' => 'D',
			'??' => 'd', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e',
			'??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e', '??' => 'e',
			'??' => 'e', '??' => 'e', '??' => 'e', '??' => 'f', '??' => 'f', '??' => 'f', '??' => 'g', '??' => 'g', '??' => 'g',
			'??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g', '??' => 'g',
			'??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'h', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i', '??' => 'i',
			'??' => 'i', '??' => 'i', '??' => 'i', '??' => 'ij', '??' => 'ij', '??' => 'j', '??' => 'j', '??' => 'j', '??' => 'j',
			'??' => 'ja', '??' => 'ja', '??' => 'je', '??' => 'je', '??' => 'jo', '??' => 'jo', '??' => 'ju', '??' => 'ju',
			'??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'k', '??' => 'l', '??' => 'l',
			'??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l', '??' => 'l',
			'??' => 'l', '??' => 'm', '??' => 'm', '??' => 'm', '??' => 'm', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n',
			'??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n', '??' => 'n',
			'??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
			'??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o', '??' => 'o',
			'??' => 'o', '??' => 'oe', '??' => 'oe', '??' => 'oe', '??' => 'p', '??' => 'p', '??' => 'p', '??' => 'p', '??' => 'q',
			'??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r', '??' => 'r',
			'??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's', '??' => 's',
			'??' => 'sch', '??' => 'sch', '??' => 'sh', '??' => 'sh', '??' => 'ss', '??' => 't', '??' => 't', '??' => 't',
			'??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '??' => 't', '???' => 'tm',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u', '??' => 'u',
			'??' => 'u', '??' => 'u', '??' => 'ue', '??' => 'v', '??' => 'v', '??' => 'v', '??' => 'w', '??' => 'w', '??' => 'w',
			'??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'y', '??' => 'z', '??' => 'z',
			'??' => 'z', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 'z', '??' => 'zh', '??' => 'zh', '??' => 'D', '??' => '8',
			'??' => '(c)', '??' => 'A', '??' => 'B', '??' => 'G', '??' => 'D', '??' => 'E', '??' => 'Z', '??' => 'H', '??' => 'I',
			'??' => 'K', '??' => 'L', '??' => 'M', '??' => 'N', '??' => '3', '??' => 'O', '??' => 'P',	'??' => 'R', '??' => 'S',
			'??' => 'T', '??' => 'Y', '??' => 'F', '??' => 'X', '??' => 'PS', '??' => 'W', '??' => 'A', '??' => 'E', '??' => 'I',
			'??' => 'O', '??' => 'Y', '??' => 'H', '??' => 'W', '??' => 'I', '??' => 'Y', '??' => 'a', '??' => 'b', '??' => 'g',
			'??' => 'd', '??' => 'e', '??' => 'z', '??' => 'h', '??' => '8', '??' => 'i', '??' => 'k', '??' => 'l', '??' => 'm',
			'??' => 'n', '??' => '3', '??' => 'o', '??' => 'p', '??' => 'r', '??' => 's', '??' => 't', '??' => 'y', '??' => 'f',
			'??' => 'x', '??' => 'ps', '??' => 'w', '??' => 'a', '??' => 'e', '??' => 'i', '??' => 'o', '??' => 'y', '??' => 'h',
			'??' => 'w', '??' => 's', '??' => 'i', '??' => 'y', '??' => 'y', '??' => 'i',
		];
		$string = strtr($string, $replace);
		$string = preg_replace('/[^\p{L}\p{Nd}\.]+/u', $delimiter, $string);
		return trim($string, $delimiter);
	}
}

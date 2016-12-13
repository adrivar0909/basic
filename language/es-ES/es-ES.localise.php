<?php
/**
 * @package    Joomla.Language
 *
 * @copyright	Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 * Traducido por www.joomlaspanish.org 2014
 */

defined('_JEXEC') or die;

/**
 * es-ES localise class
 *
 * @package		Joomla.Site
 * @since		1.6
 */
abstract class es_ESLocalise
{
	/**
	 * Devuelve los sufijos potenciales para un n�mero determinado de art�culos
	 *
	 * @param	int $count  El n�mero de art�culos.
	 *
	 * @return	array  Una serie de sufijos potenciales.
	 *
	 * @since	1.6
	 */
	public static function getPluralSuffixes($count)
	{
		if ($count == 0)
		{
			$return = array('0');
		}
		elseif ($count == 1)
		{
			$return = array('1');
		}
		else
		{
			$return = array('MORE');
		}
		return $return;
	}
	/**
	 * Devuelve las palabras de b�squeda ignoradas
	 *
	 * @return	array  Un conjunto de palabras de b�squeda ignoradas.
	 *
	 * @since	1.6
	 */
	public static function getIgnoredSearchWords()
	{
		$search_ignore = array();
		$search_ignore[] = "and";
		$search_ignore[] = "in";
		$search_ignore[] = "on";
		return $search_ignore;
	}
	/**
	 * Devuelve el l�mite de longitud inferior de las palabras de b�squeda
	 *
	 * @return	integer  El l�mite de longitud inferior de los t�rminos de b�squeda.
	 *
	 * @since	1.6
	 */
	public static function getLowerLimitSearchWord()
	{
		return 3;
	}
	/**
	 * Devuelve el l�mite de longitud superior de las palabras de b�squeda
	 *
	 * @return	integer  El l�mite de longitud superior de los t�rminos de b�squeda.
	 *
	 * @since	1.6
	 */
	public static function getUpperLimitSearchWord()
	{
		return 20;
	}
	/**
	 * Devuelve el n�mero de caracteres para mostrar a la hora de buscar
	 *
	 * @return	integer  El n�mero de caracteres para mostrar a la hora de buscar.
	 * @since	1.6
	 */
	public static function getSearchDisplayedCharactersNumber()
	{
		return 200;
	}
}
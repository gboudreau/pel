<?php

/*  PEL: PHP EXIF Library.  A library with support for reading and
 *  writing all EXIF headers in JPEG and TIFF images using PHP.
 *
 *  Copyright (C) 2004  Martin Geisler <gimpster@users.sourceforge.net>
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program in the file COPYING; if not, write to the
 *  Free Software Foundation, Inc., 59 Temple Place, Suite 330,
 *  Boston, MA 02111-1307 USA
 */

/* $Id$ */


/**
 * Standard PEL exception.
 *
 * @author Martin Geisler <gimpster@users.sourceforge.net>
 * @version $Revision$
 * @date $Date$
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License (GPL)
 * @package PEL
 */

/**
 * A printf() capable exception.
 *
 * This class is a simple extension of the standard Exception class in
 * PHP, and all the methods defined there retain their original
 * meaning.
 *
 * @package PEL
 * @subpackage Exception
 */
class PelException extends Exception {

  /**
   * Construct a new PEL exception.
   *
   * @param string $fmt an optional format string can be given.  It
   * will be used as a format string for sprintf().  The remaining
   * arguments will be available for the format string as usual with
   * sprintf().
   *
   * @param mixed $args,... any number of arguments to be used with
   * the format string.
   */
  function __construct(/* fmt, args... */) {
    $args = func_get_args();
    $str = array_shift($args);
    parent::__construct(vsprintf($str, $args));
  }
}

?>
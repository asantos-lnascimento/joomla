<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2011 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Http;

use Joomla\Http\TransportInterface as FrameworkTransportInterface;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * HTTP transport class interface.
 *
 * @since       1.7.3
 *
 * @deprecated  4.0 will be removed in 6.0
 *              Implement Joomla\Http\TransportInterface instead
 */
interface TransportInterface extends FrameworkTransportInterface
{
}

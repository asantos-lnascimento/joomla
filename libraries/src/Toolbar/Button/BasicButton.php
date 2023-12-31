<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2018 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Toolbar\Button;

use Joomla\CMS\Toolbar\ToolbarButton;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Renders a basic button.
 *
 * @since  4.0.0
 */
class BasicButton extends ToolbarButton
{
    /**
     * Property layout.
     *
     * @var  string
     *
     * @since  4.0.0
     */
    protected $layout = 'joomla.toolbar.basic';

    /**
     * Fetch the HTML for the button
     *
     * @param   string  $type  Unused string.
     *
     * @return  void
     *
     * @since   3.0
     *
     * @deprecated  4.3 will be removed in 6.0
     *              Use render() instead.
     *
     * @throws  \LogicException
     */
    public function fetchButton($type = 'Basic')
    {
        throw new \LogicException('This is a new button in 4.0, please use render() instead.');
    }
}

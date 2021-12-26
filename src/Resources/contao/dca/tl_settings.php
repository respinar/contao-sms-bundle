<?php

/**
 * This file is part of hofff/contao-rate-it.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author     David Molineus <david@hofff.com>
 * @author     Carsten Götzinger <info@cgo-it.de>
 * @copyright  2019 hofff.com.
 * @copyright  2013-2018 cgo IT.
 * @license    https://github.com/hofff/contao-rate-it/blob/master/LICENSE LGPL-3.0-or-later
 * @filesource
 */

declare(strict_types=1);

/**
 * palettes
 */
$GLOBALS['TL_DCA']['tl_settings']['palettes']['default'] .= ';{sms_legend:hide},sms_gateway,sms_fromNumber,sms_username,sms_password';

/**
 * fields
 */

$GLOBALS['TL_DCA']['tl_settings']['fields']['sms_gateway'] = [
    'exclude'   => true,    
    'inputType' => 'text',
    'eval'      => ['mandatory' => false, 'tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_settings']['fields']['sms_fromNumber'] = [
    'exclude'   => true,    
    'inputType' => 'text',
    'eval'      => ['mandatory' => false, 'tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_settings']['fields']['sms_username'] = [
    'exclude'   => true,    
    'inputType' => 'text',
    'eval'      => ['mandatory' => false, 'tl_class' => 'w50'],
];
$GLOBALS['TL_DCA']['tl_settings']['fields']['sms_password'] = [
    'exclude'   => true,    
    'inputType' => 'text',
    'eval'      => ['mandatory' => false, 'tl_class' => 'w50'],
];
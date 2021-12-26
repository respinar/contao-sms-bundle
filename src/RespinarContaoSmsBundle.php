<?php

declare(strict_types=1);

/*
 * This file is part of Contao SMS Bundle.
 * 
 * (c) Hamid Abbaszadeh 2021 <abbaszadeh.h@gmail.com>
 * @license GPL-3.0-or-later
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/respinar/contao-sms-bundle
 */

namespace Respinar\ContaoSmsBundle;

use Respinar\ContaoSmsBundle\DependencyInjection\RespinarContaoSmsExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class RespinarContaoSmsBundle
 */
class RespinarContaoSmsBundle extends Bundle
{
	public function getContainerExtension(): RespinarContaoSmsExtension
	{
		return new RespinarContaoSmsExtension();
	}

	/**
	 * {@inheritdoc}
	 */
	public function build(ContainerBuilder $container): void
	{
		parent::build($container);
		
	}
}

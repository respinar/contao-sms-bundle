<?php

declare(strict_types=1);

namespace Respinar\ContaoSmsBundle\Controller;

use Contao\Config;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface;

/*
 * Class sendSMSAPI
 */
class sendSMSAPIsetting
{
    /**
     * @var ContaoFrameworkInterface
     */
    private $framework;

    /**
     * sendSMSAPI constructor.
     *
     * @param ContaoFrameworkInterface $framework
     */
    public function __construct(ContaoFrameworkInterface $framework)
    {
        $this->framework = $framework;

        $this->framework->initialize();

        $configAdapter = $this->framework->getAdapter(Config::class);

        $this->sms_gateway    =  (string) $configAdapter->get('sms_gateway');
        $this->sms_fromNumber =  (string) $configAdapter->get('sms_fromNumber');
        $this->sms_username   =  (string) $configAdapter->get('sms_username');
        $this->sms_password   =  (string) $configAdapter->get('sms_password');
    }

}
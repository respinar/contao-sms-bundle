<?php

declare(strict_types=1);

namespace Respinar\ContaoSmsBundle\Controller;

use SoapClient;

use Contao\CoreBundle\Framework\FrameworkAwareInterface;
use Contao\CoreBundle\Framework\FrameworkAwareTrait;

/*
 * Class sendSMSAPI
 */
class sendSMSAPI implements FrameworkAwareInterface
{
    use FrameworkAwareTrait;

    /**
     * sendSMSAPI constructor.
     *
     */
    public function __construct()
    {
        // Somthings
    }

    public function __invoke(string $toNumber, string $message)
    {

        $settings = new sendSMSAPISetting($this->framework);

        ini_set("soap.wsdl_cache_enabled", "0");

        $sms_client = new SoapClient($this->sms_gateway, array('encoding'=>'UTF-8'));

        try {
            $parameters['userName'] = $settings->sms_username;
            $parameters['password'] = $settings->sms_password;
            $parameters['fromNumber'] = $settings->sms_fromNumber;
            $parameters['toNumbers'] = array("09120001234");
            $parameters['messageContent'] = "message content";
            $parameters['isFlash'] = false;
            $recId = array();
            $status = array();
            $parameters['recId'] = &$recId ;
            $parameters['status'] = &$status ;

            $status = $sms_client->SendSMS($parameters)->SendSMSResult;            
        }

        catch (Exception $e) 
        {
            $status = $e->getMessage();
        }

        return $status;
    }
}
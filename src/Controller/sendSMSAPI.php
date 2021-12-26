<?php

declare(strict_types=1);

namespace Respinar\ContaoSmsBundle\Controller;

use SoapClient;
use Contao\Config;
use Contao\CoreBundle\Framework\ContaoFrameworkInterface;

/*
 * Class sendSMSAPI
 */
class sendSMSAPI
{
    /** @var ContaoFrameworkInterface */
    private $framework;

    public function __construct() //ContaoFrameworkInterface $framework)
    {
        //$this->framework = $framework;

        //$this->framework->initialize();

        //$configAdapter = $this->framework->getAdapter(Config::class);

        $this->sms_gateway    =  'http://payamak-service.ir/SendService.svc?wsdl'; //(string) $configAdapter->get('sms_gateway');
        $this->sms_fromNumber =  "09142553221";//(string) $configAdapter->get('sms_fromNumber');
        $this->sms_username   =  "hamid";//(string) $configAdapter->get('sms_username');
        $this->sms_password   =  "oxford87";//(string) $configAdapter->get('sms_password');
    }

    public function __invoke(string $toNumber, string $message)
    {

        ini_set("soap.wsdl_cache_enabled", "0");

        $sms_client = new SoapClient($this->sms_gateway, array('encoding'=>'UTF-8'));

        try {
            $parameters['userName'] = $this->sms_username;
            $parameters['password'] = $this->sms_password;
            $parameters['fromNumber'] = $this->sms_fromNumber;
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
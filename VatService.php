<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of VatService
 *
 * @author mirjana
 */
class VatService
{
    //put your code here

    protected $countryCode;

    protected $vatNumber;

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    public function checkVatNumber(){

//        $message =
             '<?xml version="1.0" encoding="UTF-8" standalone="no"?>' +
             '<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" '+
             'xmlns:tns1="urn:ec.europa.eu:taxud:vies:services:checkVat:types" ' +
             'xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/" ' +
             'xmlns:impl="urn:ec.europa.eu:taxud:vies:services:checkVat" ' +
             'xmlns:apachesoap="http://xml.apache.org/xml-soap" ' +
             'xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" ' +
             'xmlns:xsd="http://www.w3.org/2001/XMLSchema" ' +
             'xmlns:wsdlsoap="http://schemas.xmlsoap.org/wsdl/soap/" ' +
             'xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" > ' +
             '<SOAP-ENV:Body>' +
             '<tns1:checkVat xmlns:tns1="urn:ec.europa.eu:taxud:vies:services:checkVat:types">' +
             '<tns1:countryCode>NL</tns1:countryCode>' +
             '<tns1:vatNumber>809808572B01</tns1:vatNumber>' +
             '</tns1:checkVat></SOAP-ENV:Body></SOAP-ENV:Envelope>';

        $client = new SoapClient("http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl");

        $param = array("vatNumber" => $this->vatNumber, "countryCode" =>$this->countryCode);

        $response = $client->__soapCall("checkVat", $param);

        return $response;


    }

}



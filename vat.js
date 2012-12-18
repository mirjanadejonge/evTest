$(document).ready(function(){



    function buildMessage(){
         var message =
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
             '</tns1:checkVat></SOAP-ENV:Body></SOAP-ENV:Envelope>'

             return message;
    }

    function checkVat(){
//        var soapMessage = buildMessage();
//        var serviceUrl = "http://ec.europa.eu/taxation_customs/vies/services/checkVatService";
//
//        var jsonObject = jQuery.parseJSON('{"countryCode":"NL","vatNumber":"809808572B01"}');

        //console.log(jsonObject);
        //return;

//        $.ajax({
//            url: serviceUrl,
//            type: "POST",
//            dataType: "xml",
//            data: soapMessage,
//            crossDomain:true,
//            success: function(response){
//                console.log(response);
//            }
//	    });

        $.ajax({
            url: "VatService.php",
            type: "GET",
            success: function(response){
                console.log(response);
            }
        })
    }

    checkVat();
})


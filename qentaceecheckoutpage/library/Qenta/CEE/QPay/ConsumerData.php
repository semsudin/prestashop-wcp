<?php
/*
    Die vorliegende Software ist Eigentum von Qenta CEE und daher vertraulich zu behandeln.
    Jegliche Weitergabe an dritte, in welcher Form auch immer, ist unzulaessig.

    Software & Service Copyright (C) by
    Qenta Payment CEE GmbH,
    FB-Nr: FN 195599 x, https://www.qenta.com
*/

/**
 * container class for consumerData used in {@link Qenta_CEE_QPay_Initiation}
 */
final class Qenta_CEE_QPay_ConsumerData 
{
    private $_addressData = Array();
    
    private static $PREFIX = 'consumer';
    private static $EMAIL = 'Email';
    private static $BIRTH_DATE = 'BirthDate';
    private static $TAX_IDENTIFICATION_NUMBER = 'TaxIdentificationNumber';
    private static $DRIVERS_LICENSE_NUMBER = 'DriversLicenseNumber';
    private static $DRIVERS_LICENSE_COUNTRY = 'DriversLicenseCountry';
    private static $DRIVERS_LICENSE_STATE = 'DriversLicenseState';
    
    public function setEmail($mailAddress)
    {
        $this->_setField(self::$EMAIL, $mailAddress);
        return $this;
    }
    
    public function setBirthDate($birthDate)
    {
        $this->_setField(self::$BIRTH_DATE, $birthDate);
        return $this;
    }
    
    public function setTaxIdentificationNumber($taxIdentificationNumber)
    {
        $this->_setField(self::$TAX_IDENTIFICATION_NUMBER, $taxIdentificationNumber);
        return $this;
    }
    
    public function setDriversLicenseNumber($driversLicenseNumber)
    {
        $this->_setField(self::$DRIVERS_LICENSE_NUMBER, $driversLicenseNumber);
        return $this;
    }
    
    public function setDriversLicenseCountry($driversLicenseCountry)
    {
        $this->_setField(self::$DRIVERS_LICENSE_COUNTRY, $driversLicenseCountry);
        return $this;
    }
    
    public function setDriversLicenseState($driversLicenseState)
    {
        $this->_setField(self::$DRIVERS_LICENSE_STATE, $driversLicenseState);
        return $this;
    }
    
    public function addAddressInformation(Qenta_CEE_QPay_Address $address)
    {
        $consumerData = array_merge($this->_addressData, $address->getData());
        $this->_addressData = $consumerData;
        return $this;
    }

    private function _setField($name, $value)
    {
        //e.g. consumerBillingFirstname
        $this->_addressData[self::$PREFIX . $name] = strval($value);
    }

    public function getData()
    {
        return $this->_addressData;
    }
}
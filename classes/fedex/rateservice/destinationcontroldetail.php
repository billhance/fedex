<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Data required to complete the Destionation Control Statement for US exports.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_RateService_DestinationControlDetail
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param array[DestinationControlStatementType] $StatementTypes
     * return FedEx_RateService_DestinationControlDetail
     */
    public function setStatementTypes(array $statementTypes)
    {
        $this->StatementTypes = $statementTypes;
        return $this;
    }
    
    /**
     * Comma-separated list of up to four country codes, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $DestinationCountries
     * return FedEx_RateService_DestinationControlDetail
     */
    public function setDestinationCountries($destinationCountries)
    {
        $this->DestinationCountries = $destinationCountries;
        return $this;
    }
    
    /**
     * Name of end user, required for DEPARTMENT_OF_STATE statement.
     *
     * @param string $EndUser
     * return FedEx_RateService_DestinationControlDetail
     */
    public function setEndUser($endUser)
    {
        $this->EndUser = $endUser;
        return $this;
    }
    

    
}
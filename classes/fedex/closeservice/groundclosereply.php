<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_GroundCloseReply
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setHighestSeverity(FedEx_CloseService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[Notification] $Notifications
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * 
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setTransactionDetail(FedEx_CloseService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * 
     *
     * @param VersionId $Version
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setVersion(FedEx_CloseService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $CodReport
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setCodReport($codReport)
    {
        $this->CodReport = $codReport;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $HazMatCertificate
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setHazMatCertificate($hazMatCertificate)
    {
        $this->HazMatCertificate = $hazMatCertificate;
        return $this;
    }
    
    /**
     * 
     *
     * @param ManifestFile $Manifest
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setManifest(FedEx_CloseService_ManifestFile $manifest)
    {
        $this->Manifest = $manifest;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $MultiweightReport
     * return FedEx_CloseService_GroundCloseReply
     */
    public function setMultiweightReport($multiweightReport)
    {
        $this->MultiweightReport = $multiweightReport;
        return $this;
    }
    

    
}
<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Specifies how to store shipping documents.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ShippingDocumentStorageDetail
    extends FedEx_AbstractComplexType
{

    /**
     * Provides the path to be used for STORED or DEFERRED documents.
     *
     * @param string $FilePath
     * return FedEx_CloseService_ShippingDocumentStorageDetail
     */
    public function setFilePath($filePath)
    {
        $this->FilePath = $filePath;
        return $this;
    }
    
    /**
     * Identifies the convention by which file names are constructed for STORED or DEFERRED documents.
     *
     * @param ShippingDocumentNamingType $FileNaming
     * return FedEx_CloseService_ShippingDocumentStorageDetail
     */
    public function setFileNaming(FedEx_CloseService_ShippingDocumentNamingType $fileNaming)
    {
        $this->FileNaming = $fileNaming;
        return $this;
    }
    
    /**
     * Suffix to be placed at the end of the file name; required on some platforms to determine file type.
     *
     * @param string $FileSuffix
     * return FedEx_CloseService_ShippingDocumentStorageDetail
     */
    public function setFileSuffix($fileSuffix)
    {
        $this->FileSuffix = $fileSuffix;
        return $this;
    }
    

    
}
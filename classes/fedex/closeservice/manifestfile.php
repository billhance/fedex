<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_CloseService_ManifestFile
    extends FedEx_AbstractComplexType
{

    /**
     * 
     *
     * @param string $FileName
     * return FedEx_CloseService_ManifestFile
     */
    public function setFileName($fileName)
    {
        $this->FileName = $fileName;
        return $this;
    }
    
    /**
     * 
     *
     * @param base64Binary $File
     * return FedEx_CloseService_ManifestFile
     */
    public function setFile($file)
    {
        $this->File = $file;
        return $this;
    }
    

    
}
<?php
namespace DevAll\ExportInvoices\Model\Mail\Template;

use Zend\Mime\Part;
use Zend_Mime;

class TransportBuilder extends \Magento\Framework\Mail\Template\TransportBuilder
{
    /**
     * Method for email attachments
     *
     * @param string $pdfString
     * @param string $filename
     * @return Part
     */
    public function addAttachment($pdfString, $filename)
    {
        $attachment = new Part($pdfString);
        $attachment->type = Zend_Mime::TYPE_OCTETSTREAM;
        $attachment->disposition = Zend_Mime::DISPOSITION_ATTACHMENT;
        $attachment->encoding = Zend_Mime::ENCODING_BASE64;
        $attachment->filename = $filename;
        return $attachment;
    }
}

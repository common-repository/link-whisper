<?php

namespace LWVendor\PhpOffice\PhpSpreadsheet\Writer\Xlsx;

use LWVendor\PhpOffice\PhpSpreadsheet\Writer\Xlsx;
abstract class WriterPart
{
    /**
     * Parent Xlsx object.
     *
     * @var Xlsx
     */
    private $parentWriter;
    /**
     * Get parent Xlsx object.
     *
     * @return Xlsx
     */
    public function getParentWriter()
    {
        return $this->parentWriter;
    }
    /**
     * Set parent Xlsx object.
     */
    public function __construct(Xlsx $pWriter)
    {
        $this->parentWriter = $pWriter;
    }
}
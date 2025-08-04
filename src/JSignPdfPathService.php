<?php

namespace JSignPDF\JSignPDFBin;

/**
 * @author Jeidison Farias <jeidison.farias@gmail.com>
 */
class JSignPdfPathService
{
    /**
     * Downloaded from:
     * https://github.com/intoolswetrust/jsignpdf/releases
     */
    public static function jSignPdfJarPath(): string
    {
        return implode(DIRECTORY_SEPARATOR, [
            __DIR__, '..', 'bin', 'jsignpdf-2.3.0', 'JSignPdf.jar'
        ]);
    }

}

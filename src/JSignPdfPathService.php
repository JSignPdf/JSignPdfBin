<?php

namespace JSignPDF\JSignPDFBin;

/**
 * @author Jeidison Farias <jeidison.farias@gmail.com>
 */
class JSignPdfPathService
{
    public static function jSignPdfJarPath()
    {
        return implode(DIRECTORY_SEPARATOR, [
            __DIR__, '..', 'bin', 'jsignpdf-1.6.4', 'JSignPdf.jar'
        ]);
    }

}
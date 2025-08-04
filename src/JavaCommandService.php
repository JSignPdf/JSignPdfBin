<?php

namespace JSignPDF\JSignPDFBin;

/**
 * @author Jeidison Farias <jeidison.farias@gmail.com>
 */
class JavaCommandService
{
    public static function instance()
    {
        return new self();
    }

    public function command($isInstalled = false)
    {
        if ($isInstalled)
            return "java";

        return $this->builderPathJre();
    }

    private function builderPathJre()
    {
        return __DIR__ .
            DIRECTORY_SEPARATOR .
            '..' .
            DIRECTORY_SEPARATOR .
            'bin' .
            DIRECTORY_SEPARATOR .
            'jdk-21.0.8+9-jre' .
            DIRECTORY_SEPARATOR .
            'bin' .
            DIRECTORY_SEPARATOR .
            'java';
    }

}

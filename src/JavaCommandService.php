<?php

namespace JSignPDF\JSignPDFBin;

/**
 * @author Jeidison Farias <jeidison.farias@gmail.com>
 */
class JavaCommandService
{
    public static function instance(): self
    {
        return new self();
    }

    public function command($isInstalled = false): string
    {
        if ($isInstalled)
            return "java";

        return $this->builderPathJre();
    }

    /**
     * Downloaded from:
     * https://github.com/adoptium/temurin21-binaries/releases
     */
    private function builderPathJre(): string
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

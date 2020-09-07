<?php

namespace Codzo\PHPCodeSnifferGitHook ;

use Composer\Script\Event;

class Installer
{
    public static function applyPHPCSHook(Event $event)
    {
        $cmd = sprintf(
            'git config core.hooksPath %s',
            escapeshellarg(realpath(__DIR__ . '/../../../hooks/'))
        );
        system($cmd, $rv);
        return $rv;
    }
}

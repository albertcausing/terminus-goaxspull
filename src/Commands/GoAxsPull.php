<?php

namespace Pantheon\GoAxsPull\Commands;

use Pantheon\Terminus\Commands\TerminusCommand;

class GoAxsPullCommand extends TerminusCommand {
    /**
     * Print the classic message to the log.
     *
     * @command goaxspull
     */
    public function getLogs() {
        $this->log()->notice("Start's pulling");
    }
}

<?php

namespace branchonline\pgsqltester\cmd;

/**
 * Codecept commands wrap the building of different types of commands.
 *
 * @author Roelof Ruis <roelof@branchonline.nl>
 */
interface CodeceptCommand {

    /**
     * Return the command that is built by this command director.
     *
     * @return string
     */
    public function getCommandString(): string;

}
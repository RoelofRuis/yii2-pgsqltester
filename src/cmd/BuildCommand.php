<?php

namespace branchonline\pgsqltester\cmd;

/**
 * Creates codecept build commands.
 *
 * @author Roelof Ruis <roelof@branchonline.nl>
 */
class BuildCommand implements CodeceptCommand {

    /** @var string Holds the constructed command. */
    private $_command;

    /**
     * Construct a new codecept build command.
     *
     * @param bool $silent Whether to build silently.
     */
    public function __construct(bool $silent = false) {
        $builder = new CodeceptCommandBuilder();
        $builder->executeAction('build');
        if ($silent) {
            $builder->beSilent();
        }
        $this->_command = $builder->getCommand();
    }

    /** @inheritdoc */
    public function getCommandString(): string {
        return $this->_command;
    }
}
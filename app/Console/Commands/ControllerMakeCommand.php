<?php
namespace App\Console\Commands;
use Illuminate\Routing\Console\ControllerMakeCommand as Command;

class ControllerMakeCommand extends Command
{
    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace."\Http\Controllers\\".config('constants.NAMESPACE_CONTROLLER_MAKE_COMMAND');
    }
}
<?php

namespace BugBlazer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BugBlazer\BugBlazer
 */
class BugBlazer extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \BugBlazer\BugBlazer::class;
    }
}

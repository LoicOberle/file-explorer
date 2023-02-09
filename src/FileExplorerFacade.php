<?php

namespace LoicOberle\FileExplorer;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LoicOberle\FileExplorer\Skeleton\SkeletonClass
 */
class FileExplorerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'file-explorer';
    }
}

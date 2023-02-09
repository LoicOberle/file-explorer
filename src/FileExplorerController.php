<?php
namespace LoicOberle\FileExplorer;

use Illuminate\Http\Request;
use LoicOberle\DatabaseViewer\FileExplorer;

class FileExplorerController
{
    public function __invoke(FileExplorer $fileExplorer) {
        $quote = $fileExplorer->test();

        return view('databaseviewer::index');
    }
}
<?php

namespace App\Core\files;


interface IFilesRepository
{
    public function getFiles();
    public function getBudgetFiles();
    public function getPlanFiles();
    public function createFile($request);

}
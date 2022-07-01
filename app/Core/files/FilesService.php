<?php

namespace App\Core\files;

class FilesService
{
    private IFilesRepository $repository;

    public function __construct(FilesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getFiles()
    {
        return $this->repository->getFiles();
    }

    public function getBudgetFiles()
    {
        return $this->repository->getBudgetFiles();
    }

    public function getPlanFiles()
    {
        return $this->repository->getPlanFiles();
    }

    public function createFile($request)
    {
        return $this->repository->createFile($request);
    }
}
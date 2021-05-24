<?php

namespace App\Services\Auth;

interface AuthInterface
{
    public function loginAdminUser($request): array;
    public function registerAdminUser($request) : array;
    public function fetchRecords() : array;
}

<?php

namespace App\Services\Auth;
use App\Services\Auth\AuthRepository;


class AuthService implements AuthInterface {

    public AuthRepository $repository;

    public function __construct()
    {
        $this->repository = new AuthRepository();
    }

    //METHOD - creates a new admin user::
    public function registerAdminUser($request) : array {
        $data = $this->repository->registerAdminUser($request);
        if(!empty($data['error'])){
            return [
                "response" => false,
                "status"   => 500,
                "message"  => $data["error"]
            ];
        }else{
            return $data;
        }
    }

    //METHOD - creates a new admin user::ß
    public function loginAdminUser($request): array
    {
        $data = $this->repository->loginAdminUser($request);

        if (!empty($data['error'])) {
            return [
                "response"    => false,
                "status"      => 500,
                "message"     => $data['error'],
            ];
        } else {
            return $data;
        }

    }

    public function fetchRecords(): array
    {
        $data = $this->repository->fetchRecords();

        if (!empty($data['error'])) {
            return [
                "response"    => false,
                "status"      => 500,
                "message"     => $data['error'],
            ];
        } else {
            return $data;
        }

    }
}


<?php

namespace Ogroen\Messages\v1;

class UserPasswordRecovery
{
    /**
     * @var int
     */
    private $userPk;
    /**
     * @var string
     */
    private $email;

    public function __construct(int $userPk, string $email)
    {
        $this->userPk = $userPk;
        $this->email = $email;
    }

    /**
     * @return int
     */
    public function getUserPk(): int
    {
        return $this->userPk;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}
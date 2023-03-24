<?php

namespace Ogroen\Messages;

class FranchiseNewRequest extends Message
{
    /**
     * @var int
     */
    private $franchisePk;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $email;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $text;

    public function __construct(
        int $franchisePk,
        string $name,
        string $email,
        string $phone,
        string $text
    )
    {
        $this->franchisePk = $franchisePk;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->text = $text;
    }

    /**
     * @return int
     */
    public function getFranchisePk(): int
    {
        return $this->franchisePk;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param int $franchisePk
     */
    public function setFranchisePk(int $franchisePk): void
    {
        $this->franchisePk = $franchisePk;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }


}
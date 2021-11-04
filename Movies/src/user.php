<?php

class user
{
    private int $id;
    private string $username;
    private string $password;
    private plan $plan;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return plan
     */
    public function getPlan(): plan
    {
        return $this->plan;
    }

    /**
     * @param plan $plan
     */
    public function setPlan(plan $plan): void
    {
        $this->plan = $plan;
    }
}
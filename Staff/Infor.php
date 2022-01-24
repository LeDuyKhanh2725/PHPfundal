<?php

namespace Staff;

abstract class Infor
{
    protected string $id;
    protected string $name;
    protected string $email;
    protected string $phone;

    public function __construct(string $id, string $name,
        string $email, string $phone)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function getInfo()
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ];
    }

    public abstract function ManageInfor();
}


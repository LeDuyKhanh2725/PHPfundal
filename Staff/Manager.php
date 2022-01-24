<?php

namespace Staff;

class Manager extends Infor
{
    protected bool $Contact;

    public function __construct(string $id, string $name,
        string $email, string $phone,
        bool $Contact=TRUE)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->Contact = $Contact;
    }

    public function addContact()
    {
        if ($this->Contact) {
            print("Contact already supported.\n");
        }
        else {
            $this->Contact = TRUE;
            print("Contact has been signed.\n");
        }
    }

    public function ManageInfor()
    {
        print("All infor.\n");
        
    }
}


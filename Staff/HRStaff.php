<?php

namespace Staff;

class HRStaff extends Staff implements Student
{
    protected int $Studentquantity;
    


    public function __construct(string $id, string $name,
        string $email, string $phone,
        int $Studentquantity=10)
    {
        parent::__construct($id, $name, $email, $phone);
        $this->Studentquantity = $Studentquantity;
    }

    public function ManageInfor()
    {
        print("All infor HRstaff.\n");
        
    }

    public function getStudentquantity()
    {
        return $this->Studentquantity;
    }

}


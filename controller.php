<?php
# OOP for home
// Class Biodata
class Biodata
{
    public $nama, $age, $number, $email, $city;

    public function __construct($nama, $age, $number, $email, $city)
    {
        $this->nama = $nama;
        $this->age = $age;
        $this->number = $number;
        $this->email = $email;
        $this->city = $city;
    }
}

//Inheritance class Biodata 
class WorkExp extends Biodata
{
    public $position, $company, $maintask, $period;

    public function __construct($nama, $age, $number, $email, $city, $position, $company, $maintask, $period)
    {

        parent::__construct($nama, $age, $number, $email, $city);
        $this->position = $position;
        $this->company = $company;
        $this->maintask = $maintask;
        $this->period = $period;
    }
}


//Inheritance class Biodata 
class Education extends Biodata
{
    public $major, $institute, $period;
    public function __construct($nama, $age, $number, $email, $city, $major, $institute, $period)
    {
        parent::__construct($nama, $age, $number, $email, $city);
        $this->major = $major;
        $this->institute = $institute;
        $this->period = $period;
    }
}

$workexp1 = new WorkExp(
    "Aldy Wijaya Gustian",
    24,
    "813 2099 2587",
    "aldywijayag@gmail.com",
    "Kabupaten Bandung",
    "HR Admin Assitant & IT Support",
    "PT. Geekhunter International",
    "Provides recruiter's needs such as CV Edited (edit the CV from original candidate’s CV to the template CV of Geekhunter before sending to client), job post website, job ads poster, etc",
    "2016 - Present"
);

$education1 = new Education(
    "Aldy Wijaya Gustian",
    24,
    "813 2099 2587",
    "aldywijayag@gmail.com",
    "Kabupaten Bandung",
    "Information Technology",
    "Sekolah Tinggi Teknologi Bandung",
    "2019 - Present"
);

// echo $workexp1->getBiodata();
// var_dump($education1);
// echo "</br>";
// var_dump($workexp1);

# OOP for Article

# OOP for Product

# OOP for Contact

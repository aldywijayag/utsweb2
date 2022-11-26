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
    public $position, $company, $maintasks = [], $period;

    public function __construct($nama, $age, $number, $email, $city, $position, $company, $maintasks, $period)
    {

        parent::__construct($nama, $age, $number, $email, $city);
        $this->position = $position;
        $this->company = $company;
        $this->maintasks = $maintasks;
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
    [
        "Provides recruiter's needs such as CV Edited (edit the CV from original candidate’s CV to the template CV of Geekhunter before sending to client), job post website, job ads poster, etc",
        "Create job ads poster based on clients hiring inquiries and post on Geekhunter's web",
        "Data validation from several sources for recruiter's needs",
        "Manage whole settings of Google Workspace"
    ],
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

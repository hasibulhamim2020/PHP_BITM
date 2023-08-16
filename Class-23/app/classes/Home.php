<?php

namespace App\classes;

class Home
{

    private $students;

    public function __construct()
    {
        $this->students = [
            0=>[
                'name'=>'rahim ali',
                'age' =>'22',
                'address'=>'cumilla',
                'mobile'=>[
                    'mobile-01'=>'01732312998',
                    'mobile-02'=>'01939612483'
                ],[
                    'tl-01'=>'9632312998',
                    'tl-02'=>'9639612483'
                ]
            ],
            1=>[
                'name'=>'romel ali',
                'age' =>'23',
                'address'=>'dhaka',
                'mobile'=>[
                    'mobile-01'=>'01532312998',
                    'mobile-02'=>'01639612483'
                ]
            ],
            2=>[
                'name'=>'jowel ali',
                'age' =>'27',
                'address'=>'borishal',
                'mobile'=>[
                    'mobile-01'=>'01332312998',
                    'mobile-02'=>'01239612483'
                ]
            ],
            3=>[
                'name'=>'kasem ali',
                'age' =>'37',
                'address'=>'boirob',
                'mobile'=>[
                    'mobile-01'=>'01132312998',
                    'mobile-02'=>'01839612483'
                ]
            ],
            4=>[
                'name'=>'akib ali',
                'age' =>'47',
                'address'=>'zaioirob',
                'mobile'=>[
                    'mobile-01'=>'01132312998',
                    'mobile-02'=>'01839612483'
                ]
            ],
            5=>[
                'name'=>'rojob ali',
                'age' =>'57',
                'address'=>'asiirob',
                'mobile'=>[
                    'mobile-01'=>'01132312998',
                    'mobile-02'=>'01839612483'
                ]
            ],
        ];
    }

    public function index()
    {
        return header("Location: route.php?page=home");
    }

    public function getAllStudents(){
        return $this->students;
    }

}
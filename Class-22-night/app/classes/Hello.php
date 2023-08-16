<?php
namespace App\classes;
class Hello
{
    public
//        $sh_amount,
//        $bank_name,
//        $card_type,
//        $card_name,
//        $dis_amount,
//        $dis_per,
//        $total_payable_amount,


        $students = [],
        $student=[],$item,$value,$value2;


    public function  __construct()
    {
//        $this->sh_amount = 500;
//        $this->card_type = 'debit';
//        $this->card_name = 'mastercard';
//        $this->bank_name = 'city';
//        $this->dis_per= 6;
//        $this->total_payable_amount =0;

//        $this->students =['a'=>'apple', 'b'=>'ball','c'=>'cat']; //associative
//        $this->students =[0=>'apple', 1=>'ball',2=>'cat']; //numerical
//        $this->students =['apple','ball','cat']; // automatic numerical
//        $this->students =[0=>'apple', 'a'=>'ball',2=>'cat']; //hybrid

        $this->students = [
            0=>[
                'id' =>1,
                'name' => '1rafi',
                'email'=> '1rr@gmail.com',
                'phone' => [
                    'mobile-1'=>'101722222',
                    'mobile-2'=>[
                        'kp'=>'101733333',
                        'kp2'=>'21017444444',
                    ],
                ],
            ],
            1=>[
                'id' =>2,
                'name' => [
                    'name-2'=>'2rafi',
                    'name-3'=>'22rafi',
                ],
                'email'=> '2rr@gmail.com',
                'phone' => '201722222'
            ],
            2=>[
                'id' =>3,
                'name' => '3rafi',
                'email'=> '3rr@gmail.com',
                'phone' => '301722222'
            ],
            3=>[
                'id' =>4,
                'name' => '4rafi',
                'email'=> '4rr@gmail.com',
                'phone' => '401722222'
            ]
        ];
    }
    public  function index(){

        echo "<br>";

        foreach ($this->students as $this->student){
           if (is_array($this->student)){
               foreach ($this->student as $this->item){
                   if (is_array($this->item)){
                       foreach ($this->item as $this->value){
                           if (is_array($this->value)){
                               foreach ($this->value as $this->value2){
                                   echo $this->value2.', ';
                                   echo '<br>';
                               }
                           }
                           else{
                               echo $this->value.', ';
                               echo '<br>';
                           }

                       }
                   } else{
                       echo $this->item.', ';
                       echo '<br>';
                   }
               }
           }
//        echo "<br>";
        }

    }
}































































































//            echo $key. ' id= '.$this->student['id'].', ';
//            echo $key. ' name= '.$this->student['name'].', ';
//            echo $key. ' email= '.$this->student['email'].', ';
//            echo $key. ' phone= '.$this->student['phone'].'.';











//        if ($this->sh_amount >= 5000){
//            switch ($this->card_type){
//                case 'debit':
//                    {
//                        switch ($this->card_name){
//                            case 'mastercard':
//                                {
//                                    switch ($this->bank_name){
//                                        case 'city':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//                                            }
//                                            break;
//                                        case 'ibbl':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//                                            }
//                                            break;
//                                        case 'one':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        default:
//                                            echo "chack bank name.";
//                                            break;
//                                    }
//                                }
//                                break;
//                            case 'visa':
//                                {
//                                    switch ($this->bank_name){
//                                        case 'city':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'ibbl':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'one':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        default:
//                                            echo "chack bank name.";
//                                            break;
//                                    }
//                                }
//                                break;
//                            default:
//                                echo "chack card name.";
//                                break;
//                        }
//                    }
//                    break;
//                case 'credit':
//                    {
//                        switch ($this->card_name){
//                            case 'mastercard':
//                                {
//                                    switch ($this->bank_name){
//                                        case 'city':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'ibbl':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'one':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        default:
//                                            echo "chack bank name.";
//                                            break;
//                                    }
//                                }
//                                break;
//                            case 'visa':
//                                {
//                                    switch ($this->bank_name){
//                                        case 'city':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'ibbl':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        case 'one':
//                                            {
//                                                $this->dis_amount = ($this->sh_amount*$this->dis_per)/100;
//                                                $this->total_payable_amount =$this->sh_amount - $this->dis_amount;
//
//                                                echo "Total Shopping Amount:  ".$this->sh_amount."tk";
//                                                echo "<br>";
//                                                echo "Total discount Amount:  ".$this->dis_amount. "tk";
//                                                echo "<br>";
//                                                echo "Total payable Amount:  ".$this->total_payable_amount. "tk";
//
//                                            }
//                                            break;
//                                        default:
//                                            echo "chack bank name.";
//                                            break;
//                                    }
//                                }
//                                break;
//                            default:
//                                echo "chack card name.";
//                                break;
//                        }
//
//                    }
//                    break;
//                default:
//                    echo "chack card type name.";
//                    break;
//            }
//        }
//        else{
//            echo "buy more";
//
//        }

<?php
/**
 * Created by PhpStorm.
 * User: kpodvorotnyaya
 * Date: 13.11.17
 * Time: 18:13
 */




//$a = '36';
//$b = 35;
//$c = (int) $a;
//
//if ($b>$c ) {
//    echo 'b больше чем  на '.($b-$c);
//} elseif ($b==$c){
//    echo 'b равно с ';
//} else{
//    echo 'b меньше чем с на '.($c-$b);
//}
//
//
//
//echo '<br>';
//
//if ($b != $c){
//    echo 'b не равно c';
//}
//echo '<br>';
//$do_zp_dney = 9;
//$ostalos_deneg = 400;
//$stoimost_bileta = 200;
//
//// Билет cтоит меньше 200
////Осталось денег Больше или равно 300
////До ЗП меньше 10 дней
////
////Показасть текст я пойду в кино
//
//if ($do_zp_dney<10 && $ostalos_deneg >= 300 && $stoimost_bileta <= 200) {

// $a = 1;
// $b = NULL;
// $c = 'Hello';
// $v = '2,3';
// $d =[];
// $g = false;

    $name = 'Ксюша';
// $age = 21;
    echo 'Меня зовут '.$name;

    echo '<br>';

    define('NAME','Ксю');
        echo NAME;

    echo '<br>';

    $age = 10;


    if ($age >= 18 && $age <= 59 ){
        echo 'Вам еще работать и работать ';
    }
    elseif ($age >= 59 ) {
        echo 'Вам пора на пенсию ';
    }
    else {
        echo 'Вам еще рано работать ';
    }

    echo '<br>';

    $day = 7;

    switch ($day){
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo 'Это рабочий день';
            break;
        case 6:
        case 7:
            echo 'Это выходной день';
            break;
        default:
            echo 'Неизвестный день ';
    }

    echo '<br>';

    $bmw= array('name'=>'BMW ','model'=>'X5 ','speed'=>'120 ','doors'=>'5 ','year'=>'2006 ');

    foreach ($bmw as $car){
        echo $car;
    }

    echo '<br>';

    $toyota =array('name'=>'TOYOTA ','model'=>'Carina ','speed'=>'130 ','doors'=>'4 ','year'=>'2007 ');

    foreach ($toyota as $car){
         echo $car;
    }

    echo '<br>';

    $opel=array('name'=>'OPEL ','model'=>'Corsa ','speed'=>'140 ','doors'=>'5 ','year'=>'2007');
          echo $opel['name'];
          echo $opel['model'];
          echo $opel['speed'];
          echo $opel['doors'];
          echo $opel['year'];

    echo '<br>';


      for ($i = 1; $i <= 50; $i=$i+2) {
         echo $i .'<br>';
      }


        echo '<br>';


     $array = array();
     for ($i = 0; $i <= 100; $i++) {
         $array[] = $i;
     }
     echo '<pre>';
     print_r($array);

     echo '<br>';


     $number = 10819;
     $digits = preg_split('//', $number, -1, PREG_SPLIT_NO_EMPTY);
     for($i=0; $i < count($digits); $i++){

     }
      echo $i.' цифра равна '.$digits[$i];

     $str = 'hello';
       $str = strtoupper($str);
           echo $str;



    function clac($name, $pol=null){
        if ($pol=='m'){
            return 'Привет чувак!';
        }else {
            return '<br > Привет ' . $name;
        };
    }
    echo clac('Ксю');

    echo '<br>';


    function mystrlen($str)
    {
        $a = preg_split('//', $str, -1, PREG_SPLIT_NO_EMPTY);
        return count($a);
    }

        $str2 = 'меня';
    echo 'My function :'. mystrlen($str2).' <br>';
    echo 'My strlen:'.strlen($str2).' <br>';

    echo '<br>';


    function myempty($var){
        if (!isset($var) || $var == false){
            return true ;
        }

    }
    $sd=false;
    echo myempty($sd);


    $b=1;
    if(!empty($b)&& !empty($c)){
        $a= $b/$c;
        echo $a;
    }

    $trim = ' asd ';
    $end = substr($trim,strlen($trim)-1,-1);
    echo $end;
     if ($end == ' '){

     }
    echo substr($trim,2);

/*  Гит установлен
уужно было выполнить только apt-get install git
я это делала

осталось его настроить
попробуй сама настроить

git config --global user.name "Ksu312"
git config --global user.email "kpodvorotnyaya@gmail.com"

капец черт ногу сломит
я нихера не пойму вообще


почитай пока мне кое что нужно сделатьэтв


введи пароль на гит
*/














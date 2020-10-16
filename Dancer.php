<?php



class Dancer
{
    public $name;
    public $gender;

    public function __construct($name,$gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }


}

$maleQueue = new SplQueue();
$femaleQueue = new SplQueue();

$dancer1 = new Dancer('Nam','Male');
$dancer2 = new Dancer('Name','Male');
$dancer3 = new Dancer('Nama','Male');
$dancer4 = new Dancer('Nami','Male');
$dancer5 = new Dancer('Namu','female');
$dancer6 = new Dancer('Namo','female');
$dancer7 = new Dancer('Na','female');
$dancer8 = new Dancer('Nim','female');

$maleQueue->add($maleQueue,$dancer1);
$maleQueue->add($maleQueue,$dancer2);
$maleQueue->add($maleQueue,$dancer3);
$maleQueue->add($maleQueue,$dancer4);

$maleQueue->add($femaleQueue,$dancer5);
$maleQueue->add($femaleQueue,$dancer6);
$maleQueue->add($femaleQueue,$dancer7);
$maleQueue->add($femaleQueue,$dancer8);
var_dump($maleQueue);

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

$maleQueue->enqueue($dancer1);
$maleQueue->enqueue($dancer2);
$maleQueue->enqueue($dancer3);
$maleQueue->enqueue($dancer4);
$femaleQueue->enqueue($dancer5);
$femaleQueue->enqueue($dancer6);
$femaleQueue->enqueue($dancer7);
$femaleQueue->enqueue($dancer8);

function getPair($male,$female){
    if ($male->count === 0 || $female === 0){
        echo 'There is an empty line';
    } else {
        echo "<pre>";
        print_r($male->dequeue()->name);
        print_r($female->dequeue()->name);
    }
}

getPair($maleQueue,$femaleQueue);
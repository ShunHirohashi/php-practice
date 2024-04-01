<?php
// Q1 tic-tac問題

for ($i = 1; $i < 100; $i++)
if ($i % 4 === 0 && $i % 5 === 0) {
    echo "tic-tac \n";
}
elseif ($i % 4 === 0) {
    echo "tic \n";
}
elseif ($i % 5 === 0 ) {
    echo "tac \n";
}
else {
    echo "$i\n";
}

// Q2 多次元連想配列
//問題１
$personalInfos = [
  ['name' => 'Aさん','mail' => 'aaa@mail.com','tel'  => '09011112222'],
  ['name' => 'Bさん','mail' => 'bbb@mail.com','tel'  => '08033334444' ],
  ['name' => 'Cさん','mail' => 'ccc@mail.com','tel'  => '09055556666'],
];

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] .'です。';

//問題２

$personalInfos = [
  ['name' => 'Aさん','mail' => 'aaa@mail.com','tel'  => '09011112222'],
  ['name' => 'Bさん','mail' => 'bbb@mail.com','tel'  => '08033334444' ],
  ['name' => 'Cさん','mail' => 'ccc@mail.com','tel'  => '09055556666'],
];

foreach ($personalInfos as $x => $y) {
    echo $x+1 . '番目の' . $personalInfos[$x]['name'] . 'のメールアドレスは' . $personalInfos[$x]['mail'] .'で、' . $personalInfos[$x]['tel'] ."です。\n";
}

//問題３
$personalInfos = [
  ['name' => 'Aさん','mail' => 'aaa@mail.com','tel'  => '09011112222'],
  ['name' => 'Bさん','mail' => 'bbb@mail.com','tel'  => '08033334444' ],
  ['name' => 'Cさん','mail' => 'ccc@mail.com','tel'  => '09055556666'],
];

$ageList = [25, 30, 18];

foreach($ageList as $x => $y){
    $personalInfos [$x] ['age'] = $y;
}

var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId='120';
    public $studentName='山田';
}
       $pupil= new Student;  //pupil=生徒
        echo '学籍番号' . $pupil->studentId . '番の生徒は' . $pupil->studentName . 'です。';

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        $this->attend=('PHP');
        echo $this->studentName . 'は' . $this->attend . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend();

// Q5 定義済みクラス
//問題１

$date = new DateTime();
$date->modify('+1 month');
echo $date->format('Y-m-d');

//問題２

$now = new DateTime();
$prev = new DateTime('1992/4/25');
echo 'あの日から' . $prev->diff($now)->format('%a') . '日経過しました。';
?>
<?php
// Q1 変数と文字列

$message = '廣橋';
echo '私の名前は「' . $message . '」です。';

// Q2 四則演算

$num = 5 * 4;
echo "$num\n";

$num = $num / 2;
echo $num;

// Q3 日付操作

echo '現在時刻は、' . date("Y年m月d日H時i分s秒"). 'です。' ;

// Q4 条件分岐-1 if文

$device = "mac";
if ($device === "windows" || $device === "mac")
{
    echo '使用OSは、' . $device . 'です。' ;
}
else {
    echo 'どちらもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 20;
$message = ($age > 18) ? '成人です。' : '未成年です';

echo $message;

// Q6 配列

$prefecture = ['東京都', '神奈川県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県'];
echo $prefecture[2] . 'と' .  $prefecture[3]  . 'は関東地方の都道府県です。';

// Q7 連想配列-1

$city = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉市' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($city as $urban)
{
  echo  "$urban\n";
}

// Q8 連想配列-2

$city = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉市' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($city as $prefecture => $urban)
{
  if ($prefecture === '埼玉県' ){
      echo $prefecture . 'の県庁所在地は' . $urban . 'です。';
  }
}

// Q9 連想配列-3

$city = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市',
  '愛知県'=> '名古屋市',
  '大阪府'=> '大阪市'
];
  
foreach ($city as $prefecture => $urban)
{
  
  if ($prefecture === '東京都' || $prefecture === '神奈川県' || $prefecture === '千葉県' || $prefecture === '埼玉県' || $prefecture === '栃木県' || $prefecture === '群馬県' || $prefecture === '茨城県' )
  {
      echo $prefecture . 'の県庁所在地は、' . $urban . "です。\n";
  }
  else {
      echo $prefecture . "は関東地方ではありません。\n";
  }
}

// Q10 関数-1

function hello ($name)
{
    echo $name . "さん、こんにちは。 \n" ;
}

hello('金谷');
hello('安藤');

// Q11 関数-2

function calcTaxInPrice ($costPrice)
{
    $calc=$costPrice*1.1;
    return $calc ;
}

$price=1000;

$taxInPrice=calcTaxInPrice ($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。';

// Q12 関数とif文

function distinguishNum($dummyNumber)
{
    if ($dummyNumber %2 === 0){
        return $dummyNumber."は偶数です。\n";
    } else
    {
        return $dummyNumber."は奇数です。\n";
    }
}

$oddNumber=11; //oddNumber=奇数
$evenNumber=24; //evenNumber=偶数

$integer=distinguishNum($oddNumber);
$integer_2=distinguishNum($evenNumber);

echo $integer;
echo $integer_2;

// Q13 関数とswitch文

function evaluateGrade($tentativeRuling){  //tentative ruling=仮決定
  switch ($tentativeRuling) {
      case 'A':
      case 'B':
          return "合格です。\n";
          break;

      case 'C':
          return "合格ですが追加課題があります。\n";
          break;

      case 'D':
          return "不合格です。\n";
          break;

      default:
          return "判定不明です。講師に問い合わせてください。\n";
          break;
  }
}

$judgment=evaluateGrade('A');  //judgment =判定
$judgment_2=evaluateGrade('E');

echo $judgment;
echo $judgment_2;

?>
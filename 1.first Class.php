<?php
// 第三次
$name = '欣欣'; // 在外边是变量
class cart
{
	public $name = '欣欣';

	function baomao() {
		echo 'sou~~';
	}
}
$cart = new cart();
$cart ->baomao();
echo $cart ->name;
?>

<?php
// 第三次
$name = '欣欣'; // 在外边是变量
class Cart
{
	public $name = '欣欣';

	function baomao() {
		echo 'sou~~';
	}
}
$cart = new Cart();
$cart ->baomao();
echo $cart ->name;
?>

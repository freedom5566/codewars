This program tests the life of an evaporator containing a gas.

We know the content of the evaporator (content in ml), the percentage of foam or gas lost every day (evap_per_day) and the threshold (threshold) in percentage beyond which the evaporator is no longer useful. All numbers are strictly positive.

The program reports the nth day (as an integer) on which the evaporator will be out of use.

Note : Content is in fact not necessary in the body of the function "evaporator", you can use it or not use it, as you wish. Some people might prefer to reason with content, some other with percentages only. It's up to you but you must keep it as a parameter because the tests have it as an argument.

挺有趣的

給3個參數

目前我的程式沒辦法處理超過100或等於100的容器

我想一下怎麼改進

不曉得這樣可不可以

```php
function deod(int $ml,int $g,int $e):int
{
	$j=0;
	$ml>=100?:$e=$e/100*10;
	echo $e;
	while(true){
		$j++;
		$ml=$ml-(($ml/100)*$g);
		//echo $ml.PHP_EOL;
		if($e>=$ml){
			return $j;
		}
	}
	
}

```
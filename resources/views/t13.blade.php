<h1>blade</h1>

<!-- 测试注释 -->
{{-- 这是blade中定义的注释 --}}

<?php
	$name = 'php1555';

	$orders = [

		['id'=>1, 'price'=> 11],
		['id'=>2, 'price'=> 222],
		['id'=>3, 'price'=> 33],
		['id'=>4, 'price'=> 44]
	];
?>


{{ $name }}

@if ($name == 'php18')
	酷酷的
@else 
	不酷
	
@endif

@foreach($orders as $order)
	{{ $order['id'] }}___ {{$order['price']}}
@endforeach

@php
	echo $name;
@endphp
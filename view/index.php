<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script 
		async src="https://www.googletagmanager.com/gtag/js?id=G-4RWX0XFT31"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-4RWX0XFT31');
	</script>
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset=utf-8>
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="../styles.css"/>
	<!-- Include styles for buttons in head due to not rendering button styles while in styles.css -->
	<style>
		.forms button
		{
			background-color: #008CBA;
			border: transparent;
			color: white;
			border-radius: 12px;
			transition-duration: 0.4s;
			height: 50px;
			width: 85px;
			padding: 3px;
		}
		.forms button:hover
		{
			background-color: transparent;
			color: black;
			border: 2px solid #008CBA; 
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="forms" style="float: right; margin-right: 10px; margin-top: 10px;">	
			<button class="btn322" onclick="window.location.href='login.php'">Login</button>
			<button class="btn322" onclick="window.location.href='register.php'">Register</button>
		</div>
		<img class="logo" src="../image/newnewLogo1.png" id="logo">
	</div>

	<div class="space">
		<div class="row">
			<div class="column" id="lowerDiv"><h2>&nbsp&nbspАктивність</h2></div>
			<div class="column"><h2>&nbsp&nbspПерекладач</h2></div>
			<div class="column" id="lowerDiv"><h2>&nbsp&nbspЗнаходження</h2></div>
		</div>
		<div class="pictures">
			<div class="column"><img src="../image/dogActivity.png" class="dog"></div>
			<div class="column"><img src="../image/dogTraslate.png" class="dog"></div>
			<div class="column"><img src="../image/dogGps.png" class="dog"></div>
		</div>
	</div>

	<div class="iconstext">
		<div class="icons">
			<div style="width: 1%"></div>
			<div class="column"><img src="../image/prop1.png" class="prop"></div>
			<div class="column"><img src="../image/prop2.png" class="prop"></div>
			<div class="column"><img src="../image/prop3.png" class="prop"></div>
			<div style="width: 1%"></div>
		</div>
		<div class="text" data-aos="fade-in">
			<div style="width: 18%"></div>
			<div class="column"><p>Почуйте що каже ваш улюбленець<br>рідною мовою</p></div>
			<div class="column"><p>Займайтеся фітнесом<br>та будуйте дієти</p></div>
			<div class="column"><p>Стежте за здоров'ям<br>і активністю чотирилапого</p></div>
			<div style="width: 15%"></div>
		</div>	
		<div class="icons">
			<div style="width: 1%"></div>
			<div class="column"><img src="../image/prop4.png" class="prop"></div>
			<div class="column"><img src="../image/prop5.png" class="prop"></div>
			<div class="column"><img src="../image/prop6.png" class="prop"></div>
			<div style="width: 1%"></div>
		</div>
		<div class="text" data-aos="fade-in">
			<div style="width: 18%"></div>
			<div class="column"><p>Змагайтесь із друзями<br>а звання найактивнішого</p></div>
			<div class="column"><p>Дозвольте улюбленцю гуляти на самоті.<br>Ви зможете його знайти будь-де!</p></div>
			<div class="column"><p>Не пропускайте жодного моменту!</p></div>
			<div style="width: 15%"></div>
		</div>	
	</div>

	<div class="block">
		<div class="column2">
			<h1>Чому саме ми?</h1>
		    <p>Ремінець створений при підтримці провідних ветеринарних клінік.</p>
		    <p>Продукт вчитиме дітей ставитись до тварин без жорстокості.</p>
			<p>Перекладач емоцій чотирилапого гаврика.</p>
		    <p>1000 задоволених людей та їх улюбленців.</p>
		    <p>Індивідуальний підхід.</p>
		    <p>7 днів безперервного користування 1 зарядом.</p>
			<p>Постійний зв'язок у будь-якому куточку України.</p>
		    <p>Водонепроникний та ударостійкий.</p>
		</div>
		<div class="column2" data-aos="fade-left">
			<img src="../image/photo3.jpg" class="photo" id="photo322">
		</div>
	</div>

	<div class="container2" data-aos="fade-up">
		<div class="card">
			<img src="../image/collar.jpg" alt="Fitness collar" style="width:100%">
		  	<h1>Fitness + GPS</h1>
		  	<p class="price">650₴</p>
		  	<p>Розумний ремінець для тварин, який відстежує активність, стан здоров'я, та знаходить улюбленця. Також ви можете будувати дієти, та змагатися з друзями. </p>
		  	<p><button onclick="window.location.href='info1.html'">Придбати на Rozetka</button></p>
		</div>
		<div class="card" data-aos="fade-up">
			<img src="../image/collar.jpg" alt="Translate collar" style="width:100%">
		  	<h1>Translate</h1>
		  	<p class="price">800₴</p>
		  	<p>Розумний ремінець для тварин, який розпізнає мову тварин, та перекладає українською. Також ви можете будувати дієти.</p>
		  	<p><button onclick="window.location.href='info2.html'">Придбати на Rozetka</button></p>
		</div>
		<div class="card" data-aos="fade-up">
			<img src="../image/collar.jpg" alt="Translate + Fitness collar" style="width:100%">
		  	<h1>Translate + Fitness</h1>
		  	<p class="price">869₴</p>
		  	<p>Розумний ремінець для тварин, який перкладає, відстежує активність, стан здоров'я, та знаходить улюбленця. Ви можете будувати дієти, та змагатися з друзями. </p>
		  	<p><button onclick="window.location.href='info3.html'">Придбати на Rozetka</button></p>
		  	
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="js/script.js"></script>
	<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
	<script>AOS.init();</script>
</body>
</html>



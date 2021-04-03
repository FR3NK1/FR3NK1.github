<!DOCTYPE html>
<html>
<head>
	<title>Решение задач</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://kit.fontawesome.com/4cef6a3ec6.js" crossorigin="anonymous"></script>
</head>
<body> 
<header>
	<div class="contacts">
		<h2>Миронов Дмитрий</h2>
		<h2>Контакты:</h2>
		<a href="mailto:mironov_2001@mail.ru"><i class="fas fa-envelope"></i></a>
		<a href="https://www.vk.com/etozefrenky" target="_blank"><i class="fab fa-vk"></i></a>
		<a href="https://t.me/etozefrenky" target="_blank"><i class="fab fa-telegram-plane"></i></a>
		<a href="tel:+79020946834"><i class="fas fa-phone-alt"></i></a>
	</div>
	
</header>
<div class="main">
		<div class="task">
		<button class="accordion">Задание 1. PHP и HTML. Напишите код на PHP</button>
		<div class="panel">
			<p>В переменной $a лежит текст новости. В переменной $link лежит ссылка на страницу с полным текстом этой новости.
			   Нужно в переменную $b записать сокращенный текст новости по правилам: - обрезать до 180 символов - приписать многоточие - последние 2 слова и многоточие сделать ссылкой на полный текст новости.
			   Какие проблемы вы видите в решении этой задачи? Что может пойти не так?
			</p>
		</div>
		<div class="task_answer">
			
			123

		</div>
		</div>

		<div class="task">
		<button class="accordion">Задание 2. Веб-разработка</button>
		<div class="panel">
			<p>На диске лежит файл image.png, размер 20000 на 20000. Вывести картинку как баннер размером 200 на 100 пикселей.  
			   Обратите внимание на размер и пропорции.
			</p>
		</div>
		<div class="task_answer">Cras dignissim lobortis eleifend. Vivamus eget ipsum vitae sem facilisis suscipit. Mauris dui enim, rutrum at pretium in, cursus quis nibh. Donec nisl urna, rhoncus ac turpis vel, lacinia auctor arcu. Cras hendrerit ullamcorper velit in iaculis. Proin vestibulum nisi vel urna vestibulum, ac elementum est pretium. Mauris luctus odio sit amet felis volutpat, eget tristique purus feugiat. Morbi tortor enim, consectetur quis mi in, rhoncus faucibus sem. Maecenas vestibulum ornare turpis, non pharetra erat efficitur eu. Fusce rutrum nibh ac finibus ullamcorper. Maecenas mattis dui sed lorem ultricies cursus. Quisque vitae erat mi. Integer dignissim dui feugiat mi semper, sit amet pretium ligula vulputate.</div>
		</div>

		<div class="task">
		<button class="accordion">Задание 3. БД</button>
		<div class="panel">
			<p>Чем отличаются эти запросы:
			   1. SELECT * FROM a, b WHERE a.id=b.a_id;
			   2. SELECT * FROM a JOIN b ON a.id=b.a_id;
			</p>
		</div>	
		<div class="task_answer">
			Результат в обоих случаях будет одинаковый, но второй способ является наиболее эффективным для более двух таблиц, поскольку в первом случае выполняется декартовое произведение таблиц,а после отбор по нему. Второй запрос находит пересечение двух таблиц. 
		</div>
		</div>

		<div class="task">
		<button class="accordion">Задание 4. Массивы</button>
		<div class="panel">
			<p>Дан массив из 100 элементов. Требуется вывести количество пар одинаковых элементов.
			   Например: 1, 1, 2, 3, 4, -51, 12, 12, 12, -51
			</p>
		</div>	
		<div class="task_answer">
			<form method="post">
				<input type="text" name="input_array" placeholder="Введите массив через запятую">
				<input type="submit" name="submit_array" value="Посчитать пары">
			</form>
			<?php

				if (isset($_POST['input_array'])) {
				echo '<br>Вы ввели: '.$_POST['input_array'].'<br>';

				$array = explode( ',', $_POST['input_array']);
				$couple = 0;

				for ($i=0; $i < count($array); $i++) { 
					for ($k=0; $k < count($array); $k++) { 
						if (($array[$i] == $array[$k]) and ($i!=$k)) {
							$couple++;											
						}
					}
				}
				$couple = $couple / 2;

				echo '<br>Ответ: '.$couple;
				}
			?>
			
				<span class="text_purple">if</span> <span class="text_blue">(</span><span class="text_dark_blue">isset</span><span class="text_blue">($</span>_POST<span class="text_blue">['</span><span class="text_green">input_array</span><span class="text_blue">'])) {</span>
				<span class="text_dark_blue">echo</span> <span class="text_blue">'</span><span class="text_green">&lt;br&gt;Вы ввели:</span> <span class="text_blue">'.$</span>_POST<span class="text_blue">['</span><span class="text_green">input_array</span><span class="text_blue">'].'</span><span class="text_green">&lt;br&gt;</span><span class="text_blue">';</span>

				<span class="text_blue">&</span>array <span class="text_blue">=</span> <span class="text_dark_blue">explode</span><span class="text_blue">('</span> ,<span class="text_blue">', $</span>_POST<span class="text_blue">['</span><span class="text_green">input_array</span><span class="text_blue">']);</span>
				<span class="text_blue">$</span>couple <span class="text_blue">=</span> 0<span class="text_blue">;</span>

				<span class="text_purple">for</span> <span class="text_blue">($</span>i<span class="text_blue">=</span>0<span class="text_blue">; $</span>i <span class="text_blue"><</span> <span class="text_dark_blue">count</span><span class="text_blue">($</span>array<span class="text_blue">); $</span>i++<span class="text_blue">( }</span>
					<span class="text_purple">for</span> <span class="text_blue">($</span>k<span class="text_blue">=</span>0<span class="text_blue">; $</span>k <span class="text_blue"><</span> <span class="text_dark_blue">count</span><span class="text_blue">($</span>array<span class="text_blue">); $</span>k++<span class="text_blue">) {</span> 
						<span class="text_purple">if</span> <span class="text_blue">(($</span>array<span class="text_blue">[$</span>i<span class="text_blue">] == $</span>array<span class="text_blue">[$</span>k<span class="text_blue">])</span> and <span class="text_blue">($</span>i<span class="text_blue">!=$</span>k<span class="text_blue">)) {</span>
							<span class="text_blue">$</span>couple<span class="text_blue">++;</span>											
						<span class="text_blue">}</span>
					<span class="text_blue">}</span>
				<span class="text_blue">}</span>
				<span class="text_blue">$</span>couple <span class="text_blue">= $</span>couple <span class="text_blue">/</span> 2<span class="text_blue">;</span>

				<span class="text_dark_blue">echo</span> <span class="text_blue">'</span><span class="text_green">&lt;br&gt;Ответ: </span><span class="text_blue">'.$</span>couple<span class="text_blue">;</span>
				<span class="text_blue">}</span>
			
		</div>
		</div>

		<div class="task">
		<button class="accordion">Задание 5б*. Интерфейс добавления и просмотра данных</button>
		<div class="panel">
			<p>В таблице базы данных хранятся страны. Напишите на html, css, js, php интерфейс добавления новой страны в таблицу и просмотра списка стран из таблицы.
			   Структуру таблицы придумайте самостоятельно. Удаление и редактирование делать не нужно.
			</p>
		</div>
		<div class="task_answer">Vestibulum non pellentesque dui. Nulla tincidunt pretium lacus ut euismod. Aenean lorem metus, porttitor sed lacus nec, aliquam dignissim justo. Aenean ex velit, molestie a eros at, mattis fermentum sapien. Integer in feugiat ex. Donec ornare mollis odio eget hendrerit. Proin tempor ligula massa, eu hendrerit nisl ultrices eget. Curabitur iaculis quam at vehicula ornare. Etiam non lorem vel nisl dignissim facilisis quis a tellus.</div>
		</div>
</div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>
<?php
 require_once ('News.php');
 if (count($_POST) > 0) {
 	$news = new News();

 	$news->setData($_POST['news']);
 }
?>



<?php
// var_dump($news)
print_r($_POST);
?>

<form action="" method="post">
	<label for="">
		Заголовок
		<input type="text" name="news[title]">
	</label>
	<label for="">
		Текст новости
		<input type="text" name="news[content]">
	</label>
	<label for="">
		Важная новость
		<input type="checkbox" name="news[important]">
	</label>

	<input type="submit">
</form>
<? if(($page != 0)and($page != NULL)): ?>
	<a href='index.php?page=0'><button><<</button></a> <!--кнопка в начло-->
	<a href='index.php?page=<?echo($page-1)?>'><button><</button></a> <!--кнопка на прошлую страницу-->
<?endif;?>
<!-- копки с номерами страниц -->
<?if ($page_count > 1):?>
	<?if ($page_count <= 8): ?>
	<?php for($p = 0; $p <= $page_count-1; $p++): ?>
		<a href='index.php?page=<?echo($p)?>'><button><?php echo $p+1;?></button></a>
	<?endfor?>
	<?else:?>
	<?php for($p = 0; $p <= 7; $p++): ?>
		<?php if ($page < 5): ?>
			<a href='index.php?page=<?echo($p)?>'><button><?php echo $p+1;?></button></a>	
		<? elseif($page > $page_count - 6): ?>
			<a href='index.php?page=<?echo($p+$page_count-8)?>'><button><?php echo $p+$page_count-7;?></button></a>
		<? else: ?>
			<a href='index.php?page=<?echo($p+$page-5)?>'><button><?php echo $p+$page-4;?></button></a>
		<?endif?>
	<?php endfor;?>
<?endif?>
<?endif;?>
<? if($page != $page_count-1): ?>
	<a href='index.php?page=<?echo($page+1)?>'><button>></button></a> <!--кнопка на следующию страницу-->	
	<a href='index.php?page=<?echo($page_count-1)?>'><button>>></button></a> <!--кнопка в конец-->																															
<?endif;?>

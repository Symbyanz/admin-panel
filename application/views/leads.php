<?php $titles = explode("/", $title);

	// sorting leads by data
function cmp($a, $b) {
	if ($a["datetime"] == $b["datetime"]) return 0;
	return (strtotime($a["datetime"]) > strtotime($b["datetime"])) ? -1 : 1;
}

usort($vars, "cmp");

	// grouping by date
$items = [];

foreach($vars as $var) {
	$var["date"] = substr($var['datetime'], 0, -9);
	$var["time"] = substr($var['datetime'], -8, 8);
	$items[$var["date"]][] = $var;
}

?>



<div class="page__leads leads">
	<h2 class="page__title"><?php echo ucfirst($titles[0])?> <span>/ <?php echo $titles[1]?></span></h2>
	<button class="page__button leads__export">Export excel</button>
	<?php foreach($items as $date => $arr){
		echo "<div class='leads__date date'>
		<h2 class='date__title'>
		<img src='/public/img/icons/calendar.png' alt=''>
		<p>"
		.date("F j", strtotime($date))
		."</p>
		</h2>
		<div class='date__box'>";


		foreach($arr as $key => $val){
			echo "<div class='date__item item'>
			<div class='item__profile'>
			<h3 class='item__name'>"
			.$arr[$key]['name']
			."</h3>
			<h4 class='item__time'>time: <span>"
			.$arr[$key]['time']
			."</span></h4>
			<h4 class='item__number'>phone: <span>"
			.$arr[$key]['phone']
			."</span></h4>
			</div>
			<div class='item__delete'>
			<img src='/public/img/icons/trash.svg' alt=''>
			</div>
			</div>";
		};
		echo "</div>
		</div>";
	}?>
</div>

<script src="/public/js/leads.min.js"></script>
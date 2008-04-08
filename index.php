<?php
$images = array(array('tale', 'The Spennifer Tale'), array('proposal', 'The Proposal'), array('ceremony', 'The Ceremony'), array('reception', 'The Reception'), array('honeymoon', 'The Honeymoon'), array('party', 'The Wedding Party'), array('events', 'Upcoming Events'), array('guests', 'Directions and Info for Out-of-town Guests'), array('photos', 'Photo Album'), array('registries', 'Gift Registries'), array('guestbook', 'The Guestbook'), array('justmarried', 'After the Wedding'), array('contact', 'Contact Team Spennifer'), array('home', 'Home'));
$page = ($_SERVER['QUERY_STRING'] ? strtolower($_SERVER['QUERY_STRING']) : 'home');
$small = ($page == 'home' ? '' : 'small/');
$imagesize = ($small ? 100 : 150);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" >
<html>
<head>
<title>The Spennifer Wedding</title>
<link rel="stylesheet" type="text/css" href="<?=$small?>style.css" />
<script type="text/javascript">

function scroll(posneg)
{
	images = document.getElementsByName('scroll_img');
	for(i = 0; i < images.length; i++)
	{
		if(images[i].style.left.search(/px/) > 0)
			left_val = parseInt(images[i].style.left.substr(0, images[i].style.left.length - 2));
		else
			left_val = parseInt(images[i].style.left);

		left_val += posneg;
		if(left_val <= -<?=$imagesize + 5?>)
			left_val = <?=(count($images) - 1) * ($imagesize + 5)?>;
		else if(left_val >= <?=(count($images) - 1) * ($imagesize + 5)?>)
			left_val = -<?=$imagesize + 5?>;
		images[i].style.left = left_val;
	}
}

function load_tips()
{
	images = document.getElementsByTagName('img');
	for(i=0; i<images.length; i++)
	{
		if(images[i].hasAttribute('tiptitle'))
		{
			images[i].onmouseover=show_tip;
			images[i].onmousemove=move_tip;
			images[i].onmouseout=hide_tip;
		}
	}
}

function show_tip(e)
{
	if(!e) var e = window.event;
	var title = (e.target ? e.target: e.srcElement).getAttribute('tiptitle');

	var tip = document.createElement('div');
	tip.id = "tip" + title;
	tip.style.position = "absolute";
	tip.style.border = "solid 2px white";
	tip.style.padding = "3px";
	tip.style.backgroundColor = "black";
	tip.style.left = e.pageX + 5;
	tip.style.top = e.pageY + 15;
	tip.innerHTML = title;
	document.body.appendChild(tip);
}
function move_tip(e)
{
	if(!e) var e = window.event;
	var tip = document.getElementById("tip" + (e.target ? e.target: e.srcElement).getAttribute('tiptitle'));
	tip.style.left = e.pageX + 5;
	tip.style.top = e.pageY + 15;
}
function hide_tip(e)
{
	document.body.removeChild(document.getElementById("tip" + (e.target ? e.target: e.srcElement).getAttribute('tiptitle')));
}
</script>
</head>
<body onload="load_tips();">
<table id="nav">
	<tr>
	<td width="10%"><img src="<?=$small?>images/ring.jpg" /></td>
	<td width="60%"><img src="<?=$small?>images/spennifer.jpg" /></td>
	<td width="30%" id="date"><img src="<?=$small?>images/date.jpg" /></td>
	</tr>
	<tr>
		<td colspan="3">
			<table id="scroll_table" cellpadding="0" cellspacing="0">
				<tr>
					<td id="scroll_left">
					<img src="<?=$small?>images/scroll_left.jpg" onmouseover="scroller_interval = setInterval('scroll(5)', 10);" onmouseout="window.clearInterval(scroller_interval);">
					</td>
					<td id="scroll_mid">
						<div id="scroll">
<?php
foreach($images as $i => $image)
{
?>
							<a href="index.php?<?=$image[0]?>"><img id="scroll_<?=$i?>" name="scroll_img" style="position: absolute; left: <?=$i * ($imagesize + 5) - 5?>px;" src="<?=$small?>images/scroll/<?=$image[0]?>.jpg" onmouseover="document.getElementById('scroll_text').innerHTML = '<?=$image[1]?>';" onmouseout="document.getElementById('scroll_text').innerHTML = '&nbsp;';" /></a>
<?php
}
?>
						</div>
					</td>
					<td id="scroll_right">
					<img src="<?=$small?>images/scroll_right.jpg" onmouseover="scroller_interval = setInterval('scroll(-5)', 10);" onmouseout="window.clearInterval(scroller_interval);">
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td id="scroll_text" colspan="3">&nbsp;</td>
	</tr>
	<tr>
		<td colspan="3" style="text-align: center;">
<?php
@include_once("$page.php");
?>
		</td>
	</tr>
	<tr>
		<td colspan="3">
			<div id="footer">Designed by Team Spennifer &copy; 2008</div>
		</td>
	</tr>
</table>
</body>
</html>

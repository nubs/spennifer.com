<?php
$db = mysql_connect('anubis.homelinux.com', 'anubis', '1015184') or die('mysql connect error');
mysql_select_db('wedding') or die('mysql selectdb error');
if(@$_POST['message'] && @$_POST['from'])
{
	mysql_query("INSERT INTO guestbook (date, who, message) VALUES(NOW(), '" . mysql_real_escape_string($_POST['from']) . "', '" . mysql_real_escape_string($_POST['message']) . "')") or die(mysql_errno() . ': ' . mysql_error());
	echo "Thank you for signing our guestbook!";
}
?>
<form method="post" action="index.php?guestbook">
<table style="margin: 10px auto 0 auto; text-align: center;" cellpadding="0" cellspacing="5px">
	<tr>
		<th style="text-align: right">From:</th>
		<td style="text-align: left;"><input type="text" name="from"></td>
	</tr>
	<tr>
		<th style="text-align: right">Message:</th>
		<td style="text-align: left"><textarea name="message" cols="50" rows="7"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: right;"><input type="submit" name="send" value="Send"></td>
	</tr>
</table>
</form>
<?php
$messages_result = mysql_query("SELECT * FROM guestbook ORDER BY date DESC");
while($messages_row = mysql_fetch_array($messages_result))
{
	echo "<div><i>{$messages_row['who']} signed the guestbook at {$messages_row['date']}</i><br>{$messages_row['message']}</div><hr style=\"width: 40%; margin: 10px auto; border: 0px; height: 1px; color: white; background-color: white;\">";
}
?>

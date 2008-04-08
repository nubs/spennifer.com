<?php
if(@$_POST['who'] && @$_POST['message'] && @$_POST['from'])
{
	$to = ($_POST['who'] == 'Spencer' ? 'spencer@spennifer.com' : ($_POST['who'] == 'Jennifer' ? 'jennifer@spennifer.com' : 'spennifer@spennifer.com'));
	mail($to, 'spennifer.com Wedding Contact Form', $_POST['message'], "From: {$_POST['from']}\r\n");
?>
Thank you for your message!  <?=$_POST['who']?> will be in contact with you shortly.  Click <a href="index.php?contact">here</a> to send us another message.
<?php
}
else
{
	if(@$_POST['send'])
		echo "Please fill in all fields.  Thank you.";
?>
<form method="post" action="index.php?contact">
<table style="margin: 10px auto 0 auto; text-align: center;" cellpadding="0" cellspacing="5px">
	<tr>
		<th style="text-align: right">To:</th>
		<td style="text-align: left"><select name="who"><option value="Spennifer">Spennifer</option><option value="Jennifer">Jennifer</option><option value="Spencer">Spencer</option></select></td>
	</tr>
	<tr>
		<th style="text-align: right">Your email:</th>
		<td style="text-align: left;"><input type="text" name="from"></td>
	</tr>
	<tr>
		<th style="text-align: right">Message:</th>
		<td style="text-align: left"><textarea name="message" cols="50" rows="10"></textarea></td>
	</tr>
	<tr>
		<td colspan="2" style="text-align: right;"><input type="submit" name="send" value="Send"></td>
	</tr>
</table>
</form>
<?php
}
?>

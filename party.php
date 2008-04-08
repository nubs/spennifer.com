<script type="text/javascript">
function setText(person,picture,set)
{
	switch(person)
	{
	case "nicole":
		text = "<div style='font-size: 180%;'>Nicole Tucker</div><img src='images/party/bridesmaid.jpg' style='padding: 5px 0px;' /><br>When it came to picking other bridesmaids, Nicole was the first person Jennifer thought of. Not only are they both GB Wildcats and VT Hokies, but they became roommates their senior year in college. Jennifer believes that living together solidified their friendship and provided them a chance to help each other grow in many ways for which she is forever thankful.  Nicole is currently studying to become a Physical Therapist in Old Dominion's graduate program.";
		break;
	case "will":
		text = "<div style='font-size: 180%;'>Will Lawson</div><img src='images/party/groomsman.jpg' style='padding: 5px 0px;' /><br>Many of Spencer's childhood memories were with his cousin, Will.  They would spend hours exploring, building forts, and catching frogs and turtles.  Will's sense of humor and love for life make him a fun person to be around.  He is currently a student at the University of Southern Mississippi (go Golden Eagles!).";
		break;
	case "dan":
		text = "<div style='font-size: 180%;'>Daniel Spencer</div><img src='images/party/groomsman.jpg' style='padding: 5px 0px;' /><br>Dan was the first person Spencer thought of outside of family for a groomsman.  Not only were they friends at GBHS, but they both went to Virginia Tech where they spent many hours (along with Jennifer and Nicole) playing pool at The BreakZone.  Dan is currently working on his licensing requirements to be a financial advisor for Ameriprise Financial.";
		break;
	case "keri":
		text = "<div style='font-size: 180%;'>Keri McClure</div><img src='images/party/maidofhonor.jpg' style='padding: 5px 0px;' /><br>When deciding on her maid of honor it was clear to Jennifer that no one else could fill those shoes but her sister. Keri is not only family but Jennifer's best friend. Her humor, smile, and unique look at life make her a constant rock that Jennifer can go to for advice, a listening ear, or a fun girls' night out. Keri is currently a freshman at Christopher Newport University majoring in Business Management.";
		break;
	case "sean":
		text = "<div style='font-size: 180%;'>Sean Rinehart</div><img src='images/party/bestman.jpg' style='padding: 5px 0px;' /><br>Spencer knew that the only person he wanted as his best man was his father.  Whenever Spencer needs someone, Sean is always there to offer help and advice and has been a great influence on the man Spencer has become.  Sean is a Nurse Anesthetist and recently retired from the US Navy as a Lieutenant Commander.";
		break;
	case "chelsea":
		text = "<div style='font-size: 180%;'>Chelsea Rinehart</div><img src='images/party/bridesmaid.jpg' style='padding: 5px 0px;' /><br>Some people might consider it to be an obligation when including their fianc&#233;'s sibling as bridesmaid, but for Jennifer it is a privilege. Chelsea is not only a future sister-in-law but a friend. Her quirky sense of humor, compassion, and similar love of movies have made it easy for Jennifer to feel a sense of belonging when spending time with Spencer's family. Chelsea will be graduating from high school in June and will become a fellow Hokie in the fall!";
		break;
	case "ashley":
		text = "<div style='font-size: 180%;'>Ashley Osborne</div><img src='images/party/bridesmaid.jpg' style='padding: 5px 0px;' /><br>Ashley and Jennifer met while studying to become teachers in the same elementary education program at Virginia Tech. After working on many, many projects together, they quickly became friends despite the fact that they went to rival high schools. Jennifer was delighted to find out that she would be working together with Ashley in the future when both were offered jobs by the Chesapeake Public School System. Ashley's creative lesson plans and adventurous nature help add to Jennifer's teaching skills and also bring out a little bit of her wild side.";
		break;
	case "travis":
		text = "<div style='font-size: 180%;'>Travis Herrod</div><img src='images/party/groomsman.jpg' style='padding: 5px 0px;' /><br>Travis has been one of Jennifer's best friends since middle school, and has since become a good friend of Spencer's.  Travis has a great sense of humor, and enjoys movies as much as (if not more than) Spencer and Jennifer do.  Travis graduated from George Mason University and is currently an insurance salesman for USAA.";
		break;
	}

	if(set == 'on')
	{
		document.getElementById("photoCaption").innerHTML = text;
		picture.src = "images/party/" + person + ".jpg";
	}
	else
	{
		document.getElementById("photoCaption").innerHTML = '<img src="images/party/wedding_party.jpg" />';
		picture.src = "images/party/" + person + "-bw.jpg";
	}
}
</script>
<table style="margin: 0 auto;text-align: center;">
	<tr>
		<td><img src="images/party/nicole-bw.jpg" onmouseover="setText('nicole', this, 'on');" onmouseout="setText('nicole', this, 'off');" /></td>
		<td><img src="images/party/will-bw.jpg" onmouseover="setText('will', this, 'on');" onmouseout="setText('will', this, 'off');" /></td>
		<td><img src="images/party/dan-bw.jpg" onmouseover="setText('dan', this, 'on');" onmouseout="setText('dan', this, 'off');" /></td>
	</tr>
	<tr>
		<td><img src="images/party/keri-bw.jpg" onmouseover="setText('keri', this, 'on');" onmouseout="setText('keri', this, 'off');" /></td>
		<td id="photoCaption" style="width: 300; height: 400;"><img src="images/party/wedding_party.jpg" /></td>
		<td><img src="images/party/sean-bw.jpg" onmouseover="setText('sean', this, 'on');" onmouseout="setText('sean', this, 'off');" /></td>
	</tr>
	<tr>
		<td><img src="images/party/chelsea-bw.jpg" onmouseover="setText('chelsea', this, 'on');" onmouseout="setText('chelsea', this, 'off');" /></td>
		<td><img src="images/party/ashley-bw.jpg" onmouseover="setText('ashley', this, 'on');" onmouseout="setText('ashley', this, 'off');" /></td>
		<td><img src="images/party/travis-bw.jpg" onmouseover="setText('travis', this, 'on');" onmouseout="setText('travis', this, 'off');" /></td>
	</tr>
</table>

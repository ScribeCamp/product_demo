<?php
	$story1 = 'r.eLelZ94raq3rqXjk';
	$story2 = 'r.ODoKzZjr5I4sMxJc';
	$story3 = 'r.T75Ti8aXp4pYoSC7';
	$story4 = 'r.ZTcL2nFPN8ElzwQ8';

	$newstory1 = 'r.BLSdzPx6NeXhftK6';
	$newstory2 = 'r.AGm50lh2wxX2kclr';
	$newstory3 = 'r.YTbZuRv0Zjyj9X7Q';
	$newstory4 = 'r.N4r4Z2tD9ltLMNGV';

	$page = $_REQUEST['pg'];

	if ($page != 2)
	{
?>
<iframe height=300 width=600 src="http://beta.etherpad.org/p/HanselGretelAssignStudent11"></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $story1; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $newstory2; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $story2; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>

<table width=1200>
	<tr>
		<td align=center>Previous</td>
		<td align=center><a href='student1.php?pg=2'>Next</a></td>
	</tr>
</table>
<? } else { ?>
<iframe height=300 width=600 src="http://beta.etherpad.org/p/HanselGretelAssignStudent13"></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $story3; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $newstory4; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>
<iframe height=300 width=600 name='embed_readonly' src='http://beta.etherpad.org/p/<? echo $story4; ?>?showControls=false&showChat=false&showLineNumbers=true&useMonospaceFont=false'></iframe>

<table width=1200>
	<tr>
		<td align=center><a href='student1.php?pg=1'>Previous</a></td>
		<td align=center>Next</td>
	</tr>
</table>
<? } ?>

<?php 
$f = simplexml_load_file('harrypotter.xml');

# echo '<pre>';
# print_r($f);
# print_r($f->crew->staff);
# echo '</pre>';

foreach ($f->crew->staff as $staff)
{
	echo $staff->function.' : '.$staff->name.'<br>';
	# echo '<pre>';
	# print_r($staff);
	# echo '</pre>';
	
}

$f = simplexml_load_file('https://rss.macg.co/');
echo '<pre>';
# print_r($f);
echo '</pre>';

foreach ($f->channel->item as $article)
{
	echo '<a href="'.$article->link.'">'.$article->title.'</a><br>';
}
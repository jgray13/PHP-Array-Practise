<div class="outer">
<div class="container-top">
<?php
require("layout.view.php");
$animals = array('zebra', 'elephant', 'tiger', 'lion', 'whale', 'eel', 'duck', 'duck-billed-platypuss', 'monkey', 'dog', 'cat', 'mouse', 'parrot', 'shark', 'snake', 'wolf', 'aligator', 'crocodile', 'lionfish', 'panther', 'bug', 'spider', 'seahorse', 'horse', 'cow', 'pig', 'starfish', 'goose', 'hyena', 'owl', 'turkey', 'dolphin', 'donkey');
$num_animals = count($animals);
echo "<b><P>There are $num_animals animals in this array:</p></b><br>";
foreach ($animals as $value) {
	echo $value . ', ';
}
?>
</div>
<div class="container">
<?php
$animal_sounds = array('zebra' => 'bray', 'elephant' => 'trumpet', 'tiger' => 'roar', 'lion' => 'roar', 'whale' => 'sing', 'eel' => 'slither', 'duck' => 'quack', 'duck-billed-platypuss' => '?', 'monkey' => 'screech', 'dog' => 'bark', 'cat' => 'meow', 'mouse' => 'squeek', 'parrot' => 'squawk', 'shark' => 'silent', 'snake' => 'hiss', 'wolf' => 'howl', 'aligator' => 'snap', 'crocodile' => 'snap', 'lionfish' => 'bubble', 'panther' => 'roar', 'bug' => 'crawl', 'spider' => 'creep', 'seahorse' => 'bubble', 'horse' => 'neigh', 'cow' => 'moo', 'pig' => 'oink', 'starfish' => 'bubble', 'goose' => 'honk', 'hyena' => 'laugh', 'owl' => 'hoot', 'turkey' => 'gobble', 'dolphin' => 'click', 'donkey' => 'bray');
echo '<br><br><b><p>Animals and their sounds:</p></b>';
foreach ($animal_sounds as $key => $value) {
	echo '<br>&bull;', $key . ' - ' . $value;
}
?>
</div>
<div class="container">
<?php
asort($animal_sounds);
echo '<br><br><b><p>Sorted into value order - asort():</p></b>';
foreach ($animal_sounds as $key => $value) {
    echo '<br>&bull;', $key . ' - ' . $value;
}
?>
</div>
<div class="container">
<?php
ksort($animal_sounds);
echo '<br><br><b><p>Sorted into key order - ksort():</p></b>';
foreach ($animal_sounds as $key => $value) {
	echo '<br>&bull;', $key . ' - ' . $value;
}
?>
</div>
<div class="container">
<?php
sort($animal_sounds);
echo '<br><br><b><p>Sorted into value order - without keys - sort():</p></b>';
foreach ($animal_sounds as $key => $value) {
	echo '<br>&bull;', $key . ' - ' . $value;
}
?>
</div>
</div> <!-- end outer -->
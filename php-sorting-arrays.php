<?php
require("layout.view.php");
?>
<body>
<main>
<h1>PHP: Sorting Arrays</h1>
<div class="outer">
<div class="container-top">
<?php
$animals = array('zebra', 'elephant', 'tiger', 'lion', 'whale', 'duck', 'monkey', 'dog', 'cat', 'mouse', 'parrot', 'shark', 'snake', 'wolf', 'aligator', 'crocodile', 'lionfish', 'panther', 'spider', 'seahorse', 'horse', 'cow', 'pig', 'starfish', 'goose', 'hyena', 'owl', 'turkey', 'dolphin', 'donkey');
$num_animals = count($animals);
echo "<b><P>There are $num_animals animals in this array:</p></b>";
echo '<ul>';
foreach ($animals as $value) {
	echo '<li>' . $value . '</li>';
}
echo '</ul>';
?>
</div>
<div class="container-top">
<?php
$animal_sounds = array('zebra' => 'bray', 'elephant' => 'trumpet', 'tiger' => 'roar', 'lion' => 'roar', 'whale' => 'sing', 'duck' => 'quack', 'monkey' => 'screech', 'dog' => 'bark', 'cat' => 'meow', 'mouse' => 'squeek', 'parrot' => 'squawk', 'shark' => 'silent', 'snake' => 'hiss', 'wolf' => 'howl', 'aligator' => 'snap', 'crocodile' => 'snap', 'lionfish' => 'bubble', 'panther' => 'roar', 'spider' => 'creep', 'seahorse' => 'bubble', 'horse' => 'neigh', 'cow' => 'moo', 'pig' => 'oink', 'starfish' => 'bubble', 'goose' => 'honk', 'hyena' => 'laugh', 'owl' => 'hoot', 'turkey' => 'gobble', 'dolphin' => 'click', 'donkey' => 'bray');
echo '<b><p>Animals and their sounds:</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
	echo '<li>', $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
sort($animal_sounds);
echo '<b><p>Sorted into ascending value order - without keys - sort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
	echo '<li>', $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
asort($animal_sounds);
echo '<b><p>Sorted into ascending value order - asort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
    echo '<li>', $key . ' - ' . $value . '</li>';;
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
ksort($animal_sounds);
echo '<b><p>Sorted into ascending key order - ksort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
	echo '<li>', $key . ' - ' . $value . '</li>';;
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
rsort($animal_sounds);
echo '<b><p>Sorted into descending value order - without keys - rsort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
	echo '<li>', $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
arsort($animal_sounds);
echo '<b><p>Sorted into descending value order - arsort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
    echo '<li>', $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
</div>
<div class="container">
<?php
krsort($animal_sounds);
echo '<b><p>Sorted into descending key order - krsort():</p></b>';
echo '<ul>';
foreach ($animal_sounds as $key => $value) {
	echo '<li>', $key . ' - ' . $value . '</li>';
}
echo '</ul>';
?>
</div>
</div> <!-- end outer -->
</main>
</body>
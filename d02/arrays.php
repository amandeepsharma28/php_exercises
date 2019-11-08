<?php
$t=[1,2,3];
var_dump($t);
print_r($t);
$t2=['one','two','three'];
echo "Number of items", count($t2);
sort($t2);
var_dump($t2);
echo '<br>third value: ', $t2[2];
echo '<br>in_array:(',in_array('two',$t2)?'true':'false',')';
echo '<br>array_search:(',array_search('two',$t2),')';
echo '<br>array_key_exists:(',array_key_exists(2,$t2)?'true':'false',')';
for($i=0;$i<count($t2);$i++){
    echo "value for index ",$i,' is ',$t2[$i];
}
//for each loop
foreach($t2 as $i=>$v){
    echo '<br>value for index ',$i,' is ',$v;
}
?>
<html>
    <body>
        <header>
            <h1>Arrays</h1>
            <nav>
                <a href="https://www.php.net/manual/fr/ref.array.php">Array functions</a>
            </nav>
        </header>
        <main>
        </main>
    </body>
</html>
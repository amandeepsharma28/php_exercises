<?php
$name = 'php page';
define('MY_NAME', 'my name'); //Constant name is MY_NAME
define('MINUTES', 60 * 15); //Constant name is MINUTES value is integer
const RICH = true; //constant name is RICH
?>
<html>

<head>
</head>

<body>
    <header>
        <h1><?= $name ?></h1>
    </header>
    <main>
        <?php
        echo "This is the $name";
        echo MY_NAME;
        ?>
        <p>it takes <?= MINUTES ?> minutes to come here</p>
        <p>Your mortgage level is <?= RICH ? 20000 : 10000 ?></p>
        <?php if (RICH) { ?>
            <p>You are rich</p>
        <?php } ?>
        <?php if (RICH) { ?>
            <p>Your level is high</p>
        <?php } else {?>
            <p>Your level is low</p>
            <?php } ?>
            <?php if(RICH) { ?>
            echo '<p>You are at the top</p>';
        <?php } else {?>
            echo '<p>You are at the bottom</p>';
            <?php } ?>
            <!--looping-->
        <?php for($i=0;$i<5;$i++){
            echo '<span>',$i,'</span>';//'<p>'.$i.'<p>'
        }?>
        <?php
        for($i=0;$i<5;$i++){?>
        <span><?= $i ?></span>
    <?php }
        ?>
    </main>
</body>

</html>
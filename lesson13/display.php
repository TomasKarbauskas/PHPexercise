<?php

$iformation = new FilesystemIterator('./dataFiles');?>

<?php foreach ($iformation as $entry): ?>
    <div style="display: ; padding: 2rem">
        <div>
            <?php  $name = $entry->getFilename();
            $array = explode('_', $name);
            foreach ($array as $value) {
                unset ($array[0]);
            }
            $nameToDisplay = implode($array);
            echo 'File Name: '.$nameToDisplay;
            ?>
        </div>
        <div>
            <?php echo 'File Size: '.number_format(($size = $entry->getSize() / 1000000), 2).'MB';?>
        </div>
        <div>
            <?php echo 'Date: '.date('Y-m-d H:i',$dateLastModified = $entry->getMTime()); ?>
        </div>
        <button type="submit">Delete</button>
    </div>

<?php endforeach;?>












<!--//2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:-->
<!--//- failo pavadinimas (kokį buvo priskyręs vartotojas)-->
<!--//- failo dydis-->
<!--//- įkėlimo data-->
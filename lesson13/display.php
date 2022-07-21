


<?php
$information = new FilesystemIterator('./dataFiles');?>

<?php foreach ($information as $entry): ?>
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
        <div>
                <form method="post" action="deleteFile.php">
                    <input type="hidden" name="id" value="<?php echo $entry->getRealPath(); ?>">
                    <button style="margin-left: 0.5rem">delete</button>
                </form>
                <form method="post" action="download.php">
                    <input type="hidden" name="id" value="<?php echo $entry->getRealPath(); ?>">
                    <button style="margin-left: 0.5rem">download</button>
                </form>
        </div>

    </div>
<?php endforeach;?>












<!--//2. Pridėti puslapį, kuriame būtų atvaizduojami visi pauplodinti failai. Turėtų būti matoma:-->
<!--//- failo pavadinimas (kokį buvo priskyręs vartotojas)-->
<!--//- failo dydis-->
<!--//- įkėlimo data-->
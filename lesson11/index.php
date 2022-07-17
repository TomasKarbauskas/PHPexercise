
<!--<html>-->
<!--<body>-->
<?php //for($i = 0; $i < 11; $i++):?>
<!--    --><?php //if($i % 2 === 0):?>
<!--        <b> --><?php //echo $i; ?><!-- </b>-->
<!--    --><?php //else:?>
<!--        --><?PHP //echo $i; ?>
<!--    --><?php //endif; ?>
<?php //endfor; ?>
<!--</body>-->
<!--</html>-->



<!--//exercise3-->
<!--<html>-->
<!--<body>-->
<!--<form method="post" action="formData.php">-->
<!--    <input type="text" name="name" placeholder="name">-->
<!--    <input type="text" name="surname" placeholder="surname">-->
<!--    <input type="submit">-->
<!--</form>-->
<!--</body>-->
<!--</html>-->



<!--//exercise4-->
<?php //$array = [];?>
<?php //$toPrint = file_get_contents('todo_database.json'); ?>
<?php //$array = json_decode($toPrint, true); ?>
<!---->
<!--<!doctype html>-->
<!--<html>-->
<!--<body>-->
<!--<fieldset style="width: 15rem">-->
<!--<legend>New TODO</legend>-->
<!--<div>-->
<!--    <form method="post" action="formData.php"-->
<!--    <label style="padding: 0.5rem">-->
<!--        <input type="text" name="text" placeholder="enter todo">-->
<!--    </label>-->
<!--    <input type="submit">-->
<!--    </form>-->
<!--</div>-->
<!--</fieldset>-->
<!--<fieldset style="width: 15rem; margin-top: 1rem">-->
<!--    <div>-->
<!--        --><?php //foreach ($array as $todoName => $todo): ?>
<!--            <div style="padding: 0.3rem">-->
<!--                --><?php //echo $todoName ?>
<!--            </div>-->
<!--        --><?php //endforeach;?>
<!--    </div>-->
<!--</fieldset>-->
<!--</body>-->
<!--</html>-->



<!--//exercise5,6-->
<?php $array = [];?>
<?php $toPrint = file_get_contents('todo_database.json'); ?>
<?php $array = json_decode($toPrint, true); ?>

<!doctype html>
<html>
<body>
<fieldset style="width: 30rem">
<legend>New TODO</legend>
<div>
    <form method="post" action="formData.php"
    <label style="padding: 0.5rem; display: flex">
        <input type="text" name="text" placeholder="enter todo" style="margin-right: 0.3rem">
        <input type="date" style="margin-right: 0.3rem" name="date">
        <input type="time" style="margin-right: 0.3rem" name="time">
    </label>
    <input type="submit">
    </form>
</div>
</fieldset>
<fieldset style="width: 30rem; margin-top: 1rem" >
    <div>
        <?php foreach ($array as $todoName => $todo): ?>
            <div style="display: flex; justify-content: space-between">
                <div style="margin-bottom: 0.5rem">
                    <?php echo $todoName ?>
                    <div>
                        <?php echo 'Due date: '.$todo[1].' '.$todo[2] ?>
                    </div>
                </div>
                <div style="display: flex; margin-top: 1rem">
                    <?php echo $todo[0];?>
                    <form method="post" action="delete.php">
                        <input type="hidden" name="id" value="<?php echo $todoName; ?>">
                        <button style="margin-left: 0.5rem">delete</button>
                    </form>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</fieldset>
</body>
</html>

<h1>Edit een training</h1>
<br>
<form id='elearnSettingsForm' action='' method="POST">
    <table>
        <thead>
            <tr>
                <th>Training Select</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><select id='select_train' name='train'><?php echo $select?></select></td>
                <td><input type='submit' value='Selecteer'></td>
            </tr>
        </tbody>
    </table>
</form>

<br><br>

<div class='settingPaginaContent'>
    <?php echo $message; ?>
    <?php 
        if (isset($content) && $content ) {
            include($content);
        } 
    ?>
</div>
<script>
    const selectTrain = document.getElementById('select_train');
    const elearnSettingsForm = document.getElementById('elearnSettingsForm');
        
    selectTrain.addEventListener('change', function() {
        elearnSettingsForm.submit();
    });
</script>
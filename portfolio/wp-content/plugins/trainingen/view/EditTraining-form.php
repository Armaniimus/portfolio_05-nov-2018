<form action='' method='POST' validate>
    <input type='hidden' name='op'  value='update'>
    <input type='hidden' name='train' value="<?php echo $_POST['train'] ?>">
    
	
	<label for="paraf1">* Paragraaf: Inleiding</label><br>
	<textarea id="paraf1" name="paraf1" rows="4" cols="50" maxlength="150" required><?php echo stripslashes($paraf1); ?></textarea><br><br>
	
	<label for="title2">* Titel: Het resultaaat</label><br>
	<input name="title2" type="text" required value="<?php echo stripslashes($title2); ?>"/><br><br>
	
	<label for="paraf2">* Paragraaf: Het resultaat</label><br>
	<textarea id="paraf2" name="paraf2" rows="4" cols="50" maxlength="150" required><?php echo stripslashes($paraf2); ?></textarea><br><br>
	
	<label for="title3">* Titel: Inhoud training</label><br>
	<input name="title3" type="text" required value="<?php echo stripslashes($title3); ?>"/><br><br>
	
	<label for="paraf3">* Paragraaf: Inhoud training</label><br>
	<textarea id="paraf3" name="paraf3" rows="4" cols="50" maxlength="150" required><?php echo stripslashes($paraf3); ?></textarea><br><br>
	
	<label for="title4">* Titel: Na de training</label><br>
	<input name="title4" type="text" required value="<?php echo stripslashes($title4); ?>"/><br><br>
	
	<label for="paraf4">* Paragraaf: Na de training</label><br>
	<textarea id="paraf4" name="paraf4" rows="4" cols="50" maxlength="150" required><?php echo stripslashes($paraf4); ?></textarea><br><br>
	
	<label for="title5">* Titel: Praktisch</label><br>
	<input name="title5" type="text" required value="<?php echo stripslashes($title5); ?>"/><br><br>
	
	<label for="paraf5">* Paragraaf: Praktisch</label><br>
	<textarea id="paraf5" name="paraf5" rows="4" cols="50" maxlength="150" required><?php echo stripslashes($paraf5); ?></textarea><br><br>
	
	<label for="title6">Titel: Inspiratie</label><br>
	<input name="title6" type="text" value="<?php echo stripslashes($title6); ?>"/><br><br>
	
	<label for="paraf6">Paragraaf: Inspiratie</label><br>
	<textarea id="paraf6" name="paraf6" rows="4" cols="50" maxlength="150"><?php echo stripslashes($paraf6); ?></textarea><br><br>
	
	<label for="title7">Titel: Achtergrond</label><br>
	<input name="title7" type="text" value="<?php echo stripslashes($title7); ?>"/><br><br>
	
	<label for="paraf7">Paragraaf: Achtergrond</label><br>
	<textarea id="paraf7" name="paraf7" rows="4" cols="50" maxlength="150"><?php echo stripslashes($paraf7); ?></textarea><br><br>
	
	<label>Kies trainers die deze training geven</label><br>
    <?php echo $checkBoxes ?><br>
	
	<label for="hoofdTrain">Hoofd Trainer</label><br>
	<select id="hoofdTrain" name="hoofdTrain">
		<?php echo $trainerOptions?>
	</select>
    <br>
    <br>
    <button type='submit' value='Submit'>Bijwerken</button>
</form>
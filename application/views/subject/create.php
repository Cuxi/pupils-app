<?php echo validation_errors(); ?>
<?php echo form_open('subject/create'); ?>
</br>
</br>
    <label for="title">DNI</label>
    <input type="input" name="DNI" value='<?php echo $dni ?>'/><br />

    <label for="text">Asignatura</label>
    <input type="input" name="Asignatura" /><br />

    <label for="text">Nota</label>
    <input type="input" name="Nota" /><br />

    <input type="submit" name="submit" value="Create a new average" />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

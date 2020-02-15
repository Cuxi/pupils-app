<?php echo validation_errors(); ?>
<?php echo form_open('subject/delete'); ?>
</br>
</br>
    <label for="title">DNI</label>
    <input type="input" name="DNI" value='<?php echo $dni ?>'/><br />

    <label for="text">Asignatura</label>
    <input type="input" name="Asignatura" /><br />

    <input type="submit" name="submit" value="Delete average." />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

<?php echo validation_errors(); ?>
<?php echo form_open('subject/update');?>
</br>
</br>
    <label for="text">DNI</label>
    <input type="input" name="DNI" value='<?php echo $dni ?>'/><br />

    <label for="text">Asignatura</label>
    <input type="input" name="Asignatura" /><br />

    <label for="text">Nota</label>
    <input type="input" name="Nota" /><br />

    <input type="submit" name="submit" value="Update average." />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

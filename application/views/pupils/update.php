</br>
</br>
<?php echo validation_errors(); ?>
<?php echo form_open('pupil/update'); ?>

    <label for="text">Nombre</label>
    <input type="input" name="Nombre" /><br />

    <label for="text">Apellidos</label>
    <input type="input" name="Apellidos" /><br />

    <label for="text">Nacimiento(YYYY-MM-DD)</label>
    <input type="input" name="Nacimiento" /><br />

    <input type="submit" name="submit" value="Update pupil." />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

<?php echo validation_errors(); ?>
<?php echo form_open('pupils/create'); ?>
</br>
</br>

    <label for="title">DNI</label>
    <input type="input" name="DNI" /><br />

    <label for="text">Nombre</label>
    <input type="input" name="Nombre" /><br />

    <label for="text">Apellidos</label>
    <input type="input" name="Apellidos" /><br />

    <label for="text">Nacimiento(YYYY-MM-DD)</label>
    <input type="input" name="Nacimiento" /><br />

    <input type="submit" name="submit" value="Create new pupil" />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

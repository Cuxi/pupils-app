</br>
</br>
<?php echo validation_errors(); ?>
<?php echo form_open('pupil/delete'); ?>

    <label for="title">DNI</label>
    <input type="input" name="DNI" /><br />

    <input type="submit" name="submit" value="Delete pupil." />

</form>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

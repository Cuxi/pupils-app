</br>
</br>
<?php foreach ($pupils as $pupils_item): ?>
        <h3><?php echo $pupils_item['Nombre']; ?></h3>
          <p><a href="http://localhost/index.php/pupils/view/<?php echo $pupils_item['DNI'] ?>">
            <?php echo $pupils_item['DNI']; ?></a></p>
<?php endforeach; ?>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

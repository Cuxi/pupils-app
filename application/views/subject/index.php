<table>
  </br>
  </br>
  <tr>
    <th>DNI</th>
    <th>Average grade</th>
  </tr>
    <?php foreach ($subject as $subject_item):
      echo  '<tr>';
      ?>
      <td><a href="<?php echo site_url('subject/view/'.$subject_item['DNI']); ?>">
        <?php echo $subject_item['DNI']; ?></a></td>
      <?php
      echo '<td>'.$subject_item['PromedioTotal'].'</td>';
      echo  '</tr>';
    endforeach; ?>
</table>
</br>
</br>
<p><a href="http://localhost">Return to home</a></p>

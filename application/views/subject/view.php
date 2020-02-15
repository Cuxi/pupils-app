<table>
    </br>
    </br>
      <?php
      echo  '<tr>';
      echo '<th>DNI</th>';
      echo '<td>'.$subject_item[0]['DNI'].'</td>';
      echo  '</tr>';

      foreach ($subject_item as $item):
        echo  '<tr>';
        echo '<th>Asignatura</th>';
        echo '<td>'.$item['Asignatura'].'</td>';
        echo  '</tr>';
        echo  '<tr>';
        echo '<th>Nota</th>';
        echo '<td>'.$item['Nota'].'</td>';
        echo  '</tr>';
      endforeach; ?>
    </table>
    </br>
    <ul>
      <li><a href="http://localhost/index.php/subject/update/<?php echo site_url($subject_item[0]['DNI']); ?>">Update a grade from <?php echo $subject_item[0]['DNI']; ?></a></li>
      <li><a href="http://localhost/index.php/subject/delete/<?php echo site_url($subject_item[0]['DNI']); ?>">Delete a grade from <?php echo $subject_item[0]['DNI']; ?></a></li>
      <li><a href="http://localhost/index.php/subject/create/<?php echo site_url($subject_item[0]['DNI']); ?>">Create a new grade from <?php echo $subject_item[0]['DNI']; ?></a></li>
    </ul>
  </br>
  </br>
  <p><a href="http://localhost">Return to home</a></p>

<table>
  </br>
  </br>
    <?php
      foreach ($pupils_item as $item):
        if(!empty($item->DNI)){
          echo  '<tr>';
          echo '<th>DNI</th>';
          echo '<td>'.$item->DNI.'</td>';
          echo  '</tr>';
        }
        if(!empty($item->Nombre)){
          echo  '<tr>';
          echo '<th>Name</th>';
          echo '<td>'.$item->Nombre.'</td>';
          echo  '</tr>';
        }
        if(!empty($item->Apellidos)){
          echo  '<tr>';
          echo '<th>Surnames</th>';
          echo '<td>'.$item->Apellidos.'</td>';
          echo  '</tr>';
        }
        if(!empty($item->Nacimiento)){
          echo  '<tr>';
          echo '<th>Birth</th>';
          echo '<td>'.$item->Nacimiento.'</td>';
          echo  '</tr>';
        }
        if(!empty($item->telefono)){
          echo  '<tr>';
          echo '<th>Phone</th>';
          echo '<td>'.$item->telefono.'</td>';
          echo  '</tr>';
        }
      endforeach;
    ?>
  </table>
  </br>
  </br>
  <p><a href="http://localhost">Return to home</a></p>

</body>

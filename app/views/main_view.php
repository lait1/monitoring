	 <table class="table table-striped table-bordered table-hover">
	      <thead>
	        <tr>
	          <th>#</th>
	          <th>Наименование</th>
	          <th>Трекер</th>
	          <th>Обновление</th>
	          <th>Скачать</th>
	        </tr>
	      </thead>
	      <tbody>
	      <?php
			foreach($data as $link){ 
				echo'<tr>';
		        echo'  <td>'.$link->Id_link.'</td>';
		        echo'  <td><a href="'.$link->Distrib_link.'">'.$link->Name_link.'</a></td>';
		        echo'  <td>'.$link->Tracker.'</td>';
		        echo'  <td>'.$link->last_update.'</td>';
		        echo'  <td><a href="'.$link->Path_file.'">Скачать</a></td>';
		        echo'</tr>';
			}
	      ?>


			</tbody>
	    </table>
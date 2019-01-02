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
	      // $query = $connection->query("SELECT Id_link, Name_link, Distrib_link, Name_track, last_update FROM links inner join trackers where Tracker=id_track");
			foreach($data as $link){ 
				echo'<tr>';
		        echo'  <td>'.$link['Id_link'].'</td>';
		        echo'  <td><a href="'.$link['Distrib_link'].'">'.$link['Name_link'].'</a></td>';
		        echo'  <td>'.$link['Name_track'].'</td>';
		        echo'  <td>'.$link['last_update'].'</td>';
		        echo'  <td><a href="C:\Users\Dexter\Downloads\[alexfilm.cc].t1485.torrent">Скачать</a></td>';
		        echo'</tr>';
			}
	      ?>


			</tbody>
	    </table>
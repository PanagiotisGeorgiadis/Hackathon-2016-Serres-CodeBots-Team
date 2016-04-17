<?php
require ("../connection.php");
require ("../header/index.php");
?>

<div class="w3-col">
	<!-- tabs-->
	<div class="w3-col">
		<div class='w3-left tab '>
			<a href="#">Tasks</a>
		</div>
	
		<div class='w3-right'>
			<button id='btnNewTask' name='btnNewTask' class="btn btn-info" data-toggle="modal" data-target="#myModal">
				New Task
			</button>
		</div>
	</div>
	<div  style='border:1px solid #F58C1F;border-bottom:none;margin-bottom:10px;'>
		<!-- Tasks -->
		
			<div class="">
		
			<?php 

				$query = mysql_query("SELECT * FROM todo WHERE userID = '$logeduser'");
					while ($rows = mysql_fetch_array($query))   {
						echo "<form action= 'dao/index.php' method='POST' >";
						$id = $rows['id'];
						$title = $rows['title'];
						$taskText = $rows ['taskText'];	
						echo "<div class= 'col-md-2'>	
								<button type='submit' name='btnDelSticky' id='btnDelSticky' class='btnDelSticky'>
									<span class='glyphicon glyphicon-remove'></span>
								</button>";
						$posted = "$title\r\n$taskText";
						echo '<textarea class="stickyDesc" data-toggle="tooltip" title="Click to edit" readonly id="stickyDesc" name="stickyDesc" onclick="return editTask();">';
						echo $posted;
						echo '</textarea>';
						echo "<input type='hidden' id='hdn_ctrlID' name='hdn_ctrlID' value='$id'>
						</div>
						</form>";

						}
			?>

			</div>
		</div>
		<!-- Folders -->
		<div class="w3-col tabContainer folders w3-animate-right" style="display:none;"></div>
	</div>


<!-- Modal -->
<form action= 'dao/index.php' method='POST'>
<div class="modal fade myModal" id="myModal" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					&times;
				</button>
				<h4 class="modal-title">Create Your New Task</h4>
			</div>
			<div class="modal-body">
				<div class="form-group taskTitle">
					<input type="text" class="form-control txtTaskTitle" id="taskTitle" name='taskTitle' placeholder="Title" >
				</div>
				<div class="form-group">
					<textarea class="form-control taskDesc" id="taskDesc" name="taskDesc" placeholder='Description'></textarea>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick='return clearTxt(); false'>
					Close
				</button>
				<button type="submit" class="btn btn-default" name ="submitTask">
					Submit
				</button>
				
				<!-- Τα taskTitle,taskDesc,stickyDesc θα ονομαζονται με βαση το $id (Ρωτα Στεφανο)
				Θα αποθηκευεις σε  hidden field το id του task και θα το χρησιμοποιεις στην post(submit) για να ξερεις πιο task θα κανεις edit
				Σε περιπτωση που πατιεται NewTask να αποθηκευεται στο ιδιο hidden η τιμη .val() = 'new' μεσω js, οποτε την ελεγχεις για να κανεις insert into αντι της edit -->
			</div>
		</div>

	</div>
</div>
</form>
<?php
require ("../footer/index.php");
?>

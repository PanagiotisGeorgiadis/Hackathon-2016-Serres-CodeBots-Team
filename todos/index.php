<?php

require ("../header/index.php");
?>
<div class="w3-col">
	<!-- tabs-->
	<div class="w3-col">
		<div class='w3-left tab '>
			<a href="#" onclick="return showTasksTab()">Tasks</a>
		</div>
		<div class='w3-left tab '>
			<a href="#" onclick="return showFoldersTab()" >Folders</a>
		</div>
		<div class='w3-right'>
			<button id='btnNewTask' name='btnNewTask' class="btn btn-info" data-toggle="modal" data-target="#myModal">
				New Task
			</button>
		</div>
	</div>
	<div class='w3-col' style='border:1px solid #F58C1F;border-bottom:none;margin-bottom:10px;'>
		<!-- Tasks -->
		<div class="w3-col tabContainer tasks w3-animate-right">
			<div class="w3-left">
				<button type='submit' name='btnDelSticky' id='btnDelSticky' class='btnDelSticky'>
					<span class='glyphicon glyphicon-remove'></span>
				</button>
				<textarea class='stickyDesc' data-toggle="tooltip" title="Click to edit" readonly id='stickyDesc' name='stickyDesc' onclick='return editTask()'>This is a sticky note you can type and edit.</textarea>
			</div>
		</div>
		<!-- Folders -->
		<div class="w3-col tabContainer folders w3-animate-right" style="display:none;"></div>
	</div>
</div>

<!-- Modal -->
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
					<input type="text" class="form-control txtTaskTitle" id="taskTitle" name='taskDesc' placeholder="Title" required>
				</div>
				<div class="form-group">
					<textarea class="form-control taskDesc" id="taskDesc" name="taskDesc" placeholder='Description'></textarea>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal" onclick='return clearTxt(); false'>
					Close
				</button>
				<button type="submit" class="btn btn-default" data-dismiss="modal" onclick='return clearTxt(); false'>
					Submit
				</button>
				<input type='hidden' id='hdn_ctrlID' name='hdn_ctrlID' class='hdn_ctrlID'>
				<!-- Τα taskTitle,taskDesc,stickyDesc θα ονομαζονται με βαση το $id (Ρωτα Στεφανο)
				Θα αποθηκευεις σε  hidden field το id του task και θα το χρησιμοποιεις στην post(submit) για να ξερεις πιο task θα κανεις edit
				Σε περιπτωση που πατιεται NewTask να αποθηκευεται στο ιδιο hidden η τιμη .val() = 'new' μεσω js, οποτε την ελεγχεις για να κανεις insert into αντι της edit -->
			</div>
		</div>

	</div>
</div>
<?php
require ("../footer/index.php");
?>

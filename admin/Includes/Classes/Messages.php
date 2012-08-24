<?php 
class Messages{		
	
	function sucessMessage($message) {		
		?>
        <script type="text/javascript">
		showSuccess('<?php echo $message;?>',9000);
		</script>
		<?php 
		}
		
	function errorMessage($message) {
		?>
        <script type="text/javascript">
		showError('error();  <?php echo $message;?> ',9000);
		</script>
		<?php }
		
	function warningMessage($message) {
		?>
		<script type="text/javascript">
		showWarning('Warning ! <?php echo $message;?> ',9000);
		</script>
		<?php 
        }
		
		function infoMessage($message) {
		?>
		<script type="text/javascript">
		showInfo('<?php echo $message;?> ',9000);
		</script>
		<?php 
        }

		
	}

$showMessage = new Messages();
?>
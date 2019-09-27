<div id="model-blackout-delete" class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title">Confirmation</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<div class="modal-body text-center">
				<p>
					Are you sure you would like to delete the Blackout for...
					<div id="delete-blackout-dates"></div>
				</p>
				</div>
				<div class="modal-footer">
				<form id="delete-blackout-form" method="GET" action="">
					@csrf
					<button class="btn btn-danger" type="submit">Yes</button>
				</form>
				<button class="btn btn-primary" data-dismiss="modal" type="button">No</button>
				</div>
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function(){
			$('.delete-link').on("click", function() {
				$('#delete-blackout-form').attr('action', this.dataset.route);
				$('#delete-blackout-dates').text(this.dataset.range)
			});
		});
	</script>
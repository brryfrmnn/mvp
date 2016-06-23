
<div class="col-md-3">
	<div class="user-panel">
		<div class="text-center">
			
				<img src="{{url('images/default.png')}}" class="img-responsive img-thumbnail img-circle">
			
			
			<h3>Aang Miftah</h3>
		</div>
		<ul class="menu">
			<li>
				<a href="{{URL('guru/editprofil')}}">
					<i class="fa fa-user"></i>Edit Profil
				</a>
			</li>
			<li>
				<a href="#" data-toggle="modal" data-target="#changeavatar">
					<i class="fa fa-file-image-o"></i> Edit Photo
				</a>
			</li>
		</ul>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="changeavatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Ganti Photo</h4>
      </div>
      <div class="modal-body">
        <form action="upload-avatar.php" class="dropzone" id="chgavatar"></form>
      </div>
      <div class="modal-footer">
        <form action="save-avatar.php" method="post">
        	<input type="hidden" name="images" id="images" value="">
        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        	<button type="submit" class="btn btn-orange">Save</button>
        </form>
      </div>
    </div>
  </div>
</div>
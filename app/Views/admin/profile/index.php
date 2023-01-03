<?= $this->extend('admin/template') ?>
<?= $this->section('meta') ?>
<title>Profile | Pelatihan dan Kuesioner</title>
<?= $this->endSection() ?>
<!-- STYLESHEET  -->
<?= $this->section('stylesheet') ?>
<style type="text/css">	
    .img-upload {
        width: 40px;
        margin-top: -70px;
        margin-left: 80px;
        cursor: pointer;
    }
</style>
<?= $this->endSection() ?>
<!-- MAIN CONTENT -->
<?= $this->section('content') ?>
<div class="page-content">
	<div class="row">
		<div class="col-md-4">
			<div class="card overflow-hidden">
			    <div class="bg-primary bg-soft">
			        <div class="row">
			            <div class="col-7">
			                <div class="text-primary p-3">
			                    <h5 class="text-primary">Profile Anda !</h5>
			                    <p>Silahkan Update Profile Anda</p>
			                </div>
			            </div>
			            <div class="col-5 align-self-end">
			                <img src="<?= base_url(); ?>/public/assets/admin/images/profile-img.png" alt="" class="img-fluid" />
			            </div>
			        </div>
			    </div>
			    <div class="card-body pt-0">
			        <div class="row">
			            <div class="col-sm-6">
			                <div class="avatar-md profile-user-wid">
			                    <img src="<?= base_url($user->avatar); ?>" alt="" class="img-thumbnail rounded-circle" style="height: 70px; object-fit: cover;" />
			                </div>
			                <h5 class="font-size-15 text-truncate"><?= $user->name; ?></h5>
			                <p class="text-muted mb-0 text-truncate"><?= $user->email; ?></p>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card">
			        	<div class="card-body">
			            	<h4 class="card-title">Update Profile Anda</h4>
					        <br>
					        <form action="<?= base_url('admin/profile/attempProfile'); ?>" method="POST" id="profile-form" enctype="multipart/form-data">
		                        <div class="form-group">
		                            <center>
		                                <?php if (@$user->avatar) {
		                                    $url_img = $user->avatar;
		                                } else {
		                                    $url_img = "public/uploads/default.png";
		                                } ?>
		                                <img id="image-preview1" src="<?php echo base_url($url_img);?>" style="height: 150px; width:150px; object-fit: cover; border: 1px solid #F79837; border-radius: 50%;"><br>       
		                                <label for="image-source"><img src="<?= base_url('public/assets/admin/img/camera.png'); ?>" class="img-upload"></label>
		                            </center>
		                            <input class="form-control" type="file" accept="image/*" id="image-source" name="image" onchange="previewImage();" style="display: none;"/>
		                            <script>
		                                function previewImage() {
		                                    var oFReader = new FileReader();
		                                    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
		                                    oFReader.onload = function(oFREvent) {
		                                        document.getElementById("image-preview1").src = oFREvent.target.result;
		                                    }
		                                }
		                            </script>
		                        </div>
		                        <div class="form-group">
		                            <label>Username</label>
		                            <input type="text"  class="form-control" value="<?= @$user->username; ?>" readonly>
		                        </div>
		                        <div class="form-group" style="margin-top: 5px;">
		                            <label>Nama</label>
		                            <input type="text" id="name" name="name" class="form-control" placeholder="Nama Anda" required="" value="<?= @$user->name; ?>">
		                        </div>
		                        <div class="form-group" style="margin-top: 5px;">
		                            <label>Email</label>
		                            <input type="email" id="email" name="email" class="form-control" placeholder="Email Anda" required="" value="<?= @$user->email; ?>">
		                        </div>
		                        <div class="form-group" style="margin-top: 5px;">
		                            <label>Telepon</label>
		                            <input type="number" id="phone" name="phone" class="form-control" placeholder="Nama Anda" required="" value="<?= @$user->phone; ?>">
		                        </div>
		                        <hr>
		                        <p style="color: red; font-size: 14px;">Jika Ingin Merubah Password, Inputkan Password Baru Anda.</p>
		                        <div class="form-group">
		                            <label>Password</label>
		                            <input type="password" id="password" name="password" class="form-control" placeholder="Masukan Password Baru Anda" value="">
		                        </div>
		                        <div class="form-group" style="margin-top: 5px;">
		                            <label>Ulangi Password</label>
		                            <input type="password" id="ulangi_password" name="ulangi_password" class="form-control" placeholder="Ulangi Password Baru Anda" value="">
		                        </div>
		                        <br>
		                        <hr>
		                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
		                    </form>        
	                	</div>
	            	</div>
        </div>
	</div>
</div>
<!-- End Page-content -->
<?= $this->endSection() ?>

<!-- JAVASCRIPT  -->
<?= $this->section('javascript') ?>
<script type="text/javascript">
	$('#profile-form').on('submit', function(event) {
        event.preventDefault();
        $.LoadingOverlay('show');
        var fd = new FormData();
        var image = $('#image-source')[0].files;
        if(image.length > 0 ) {
            fd.append('image', image[0]);
        }
        fd.append('name', $('#name').val());
        fd.append('email', $('#email').val());
        fd.append('phone', $('#phone').val());
        fd.append('password', $('#password').val());
        fd.append('ulangi_password', $('#ulangi_password').val());
        $.ajax({
            url: $('#profile-form').attr('action'),
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            method: 'POST',
            data: fd,
            dataType: 'json',
        }).done(function(data, textStatus, jqXHR) {
            $.LoadingOverlay('hide');
            toastr.success('Berhasil Merubah Profile', 'Berhasil', {positionClass: 'toast-top-right'});  
        }).fail(function(jqXHR, textStatus, errorThrown) {
            $.LoadingOverlay('hide');
            msg = jqXHR?.responseJSON?.messages?.error ? jqXHR.responseJSON.messages.error : errorThrown;
            toastr.error(msg, 'Maaf!');
        }).always(function() {
        });
    });


	$('#bank-form').on('submit', function(event) {
        event.preventDefault();
        $.LoadingOverlay('show');
        $.ajax({
            url: $('#bank-form').attr('action'),
            method: 'POST',
            data: $('#bank-form').serialize(),
            dataType: 'json',
        }).done(function(data, textStatus, jqXHR) {
            $.LoadingOverlay('hide');
            toastr.success('Berhasil Merubah Data Bank', 'Berhasil', {positionClass: 'toast-top-right'});  
        }).fail(function(jqXHR, textStatus, errorThrown) {
            $.LoadingOverlay('hide');
            msg = jqXHR?.responseJSON?.messages?.error ? jqXHR.responseJSON.messages.error : errorThrown;
            toastr.error(msg, 'Maaf!');
        }).always(function() {
        });
    });
</script>
<?= $this->endSection() ?>
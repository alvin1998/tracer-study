<?= $this->extend('admin/template') ?>
<?= $this->section('meta') ?>
<title>List Users | Pelatihan dan Kuesioner</title>
<?= $this->endSection() ?>
<!-- STYLESHEET  -->
<?= $this->section('stylesheet') ?>
<?= $this->endSection() ?>
<!-- MAIN CONTENT -->
<?= $this->section('content') ?>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">List Users</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">List Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">List Users</h4>
                        <button type="button" onclick="tambahUsers()" class="btn btn-primary waves-effect waves-light" style="float: right; margin-top: -30px;">
                            <i class="bx bx-add-to-queue font-size-16 align-middle me-2"></i> Tambah
                        </button>
                        <br><br>
                        <table id="tables" class="table table-bordered dt-responsive w-100">
                            <thead>
                                <tr>
                                    <th>Avatar</th>
                                    <th>Nama</th>
                                    <th>Telepon</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>

                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- container-fluid -->
</div>

<div class="modal fade" id="UsersModal" tabindex="-1" role="dialog" aria-labelledby="Users-detailModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Users-detailModalLabel">Tambah Users</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('admin/users/attempUsers'); ?>" method="POST" id="form-tambah-Users">
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Masukan Nama" required="">
                    <input type="hidden" class="form-control" name="id" id="id">
                    <input type="hidden" value="admin" class="form-control" name="group" id="group">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Masukan Username" required="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Masukan Email" required="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Telepon</label>
                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Masukan Telepon" required="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-control" name="status" id="statusUsers">
                        <option value="active">Aktif</option>
                        <option value="non-active">Non-Aktif</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukan Password" required="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Avatar</label>
                    <center>
                        <?php $url_img = "public/uploads/default.png"; ?>
                        <img id="image-preview2" src="<?php echo base_url(@$url_img);?>" style="width:100%; height:200px; object-fit: scale-down; border: 1px solid #F79837; border-radius: 5px;"><br>
                    </center>
                    <input style="margin-top: 5px;" class="form-control" type="file" accept="image/*" id="avatar" name="avatar" onchange="previewImage2();"/>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="sub-btn">Simpan</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- End Page-content -->

<!-- subscribeModal -->
<div class="modal fade" id="deletedModal" tabindex="-1" aria-labelledby="subscribeModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="text-center mb-4">

                    <div class="row justify-content-center">
                        <div class="col-xl-10">
                            <h4 class="text-primary">Apakah Anda Yakin !</h4>
                            <p class="text-muted font-size-14 mb-4">Menghapus Users Ini?.</p>

                            <button type="button" class="btn btn-danger" id="dlt-btn">Hapus</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end modal -->
<?= $this->endSection() ?>

<!-- JAVASCRIPT  -->
<?= $this->section('javascript') ?>
<script type="text/javascript">
    var table;
    $( document ).ready(function() {
        table = $('#tables').DataTable({
            'ajax':{
                'url'       : '<?php echo base_url('admin/users/fetchUsers') ?>',
                'dataSrc'   : 'data',
                'type'      : 'POST'
            },
            'processing'    : true,
            'serverSide'    : true,
            'ordering'      : false,
        });
    });

    function previewImage2() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("avatar").files[0]);
        oFReader.onload = function(oFREvent) {
            document.getElementById("image-preview2").src = oFREvent.target.result;
        }
    }

    function tambahUsers() {
        $('#Users-detailModalLabel').text("Tambah Users");
        $('#id').val("");
        $('#username').val("");
        $('#phone').val("");
        $('#name').val("");
        $('#email').val("");
        $('#password').val("");
        $('#statusUsers').val("active").trigger('change');
        $('#image-preview2').attr('src', '<?= base_url("public/uploads/default.png"); ?>');
        $('#form-tambah-Users').attr('action', "<?= base_url('admin/users/attempUsers'); ?>");
        $('#UsersModal').modal('show');
    }

    function editUsers(id) {
        $.LoadingOverlay('show');
        $.post('<?php echo base_url('admin/users/editingUsers') ?>', {'id': id}, function(data, textStatus, xhr) {
            $.LoadingOverlay("hide");
            $('#Users-detailModalLabel').text("Update Users");
            $('#form-tambah-Users').attr('action', "<?= base_url('admin/users/editUsers'); ?>");
            $('#id').val(data.id);
            $('#username').val(data.username);
            $('#phone').val(data.phone);
            $('#name').val(data.name);
            $('#password').val("");
            $('#email').val(data.email);
            $('#statusUsers').val("active").trigger('change');
            $('#image-preview2').attr('src', '<?= base_url(); ?>/'+data.avatar);
            $('#UsersModal').modal('show');
        }, 'json');        
    }

    function deleteUser(id) {
        $('#dlt-btn').attr('onclick', 'funDeleted('+id+')');
        $('#deletedModal').modal('show');
    }

    function funDeleted(id) {
        $.LoadingOverlay('show');
        $.post('<?php echo base_url('admin/users/deletedUsers') ?>', {'id': id}, function(data, textStatus, xhr) {
            $.LoadingOverlay("hide");
            table.ajax.reload();  
            $('#deletedModal').modal('hide');
            toastr.success('Berhasil Menghapus Users', 'Berhasil', {positionClass: 'toast-top-right'}); 
        }, 'json');          
    }

    $('#form-tambah-Users').on('submit', function(event) {
        event.preventDefault();
        $.LoadingOverlay('show');
        var fd = new FormData();
        var image = $('#avatar')[0].files;
        if(image.length > 0 ) {
            fd.append('avatar', image[0]);
        }
        var id = $('#id').val();
        if (id.length > 0) {
            fd.append('id', $('#id').val());
        }
        fd.append('name', $('#name').val());
        fd.append('email', $('#email').val());
        fd.append('phone', $('#phone').val());
        fd.append('password', $('#password').val());
        fd.append('username', $('#username').val());
        fd.append('status', $('#statusUsers').val());
        fd.append('group', $('#group').val());
        $.ajax({
            url: $('#form-tambah-Users').attr('action'),
            enctype: 'multipart/form-data',
            processData: false,
            contentType: false,
            cache: false,
            method: 'POST',
            data: fd,
            dataType: 'json',
        }).done(function(data, textStatus, jqXHR) {
            $.LoadingOverlay('hide');
            table.ajax.reload();  
            $('#UsersModal').modal('hide');
            if (id.length > 0) {
                toastr.success('Berhasil Merubah Data Users', 'Berhasil', {positionClass: 'toast-top-right'});
            } else {
                toastr.success('Berhasil Menambah Data Users', 'Berhasil', {positionClass: 'toast-top-right'});
            } 
        }).fail(function(jqXHR, textStatus, errorThrown) {
            $.LoadingOverlay('hide');
            msg = jqXHR?.responseJSON?.messages?.error ? jqXHR.responseJSON.messages.error : errorThrown;
            toastr.error(msg, 'Maaf!');
        }).always(function() {
        });
    });
</script>
<?= $this->endSection() ?>
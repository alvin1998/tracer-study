<?= $this->extend('admin/template') ?>
<?= $this->section('meta') ?>
<title>List Survey | Pelatihan dan Kuesioner</title>
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
                    <h4 class="mb-sm-0 font-size-18">Laporan Survey</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                            <li class="breadcrumb-item active">Laporan Survey</li>
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
                        <h4 class="card-title">Laporan Survey</h4>
                        <br><br>
                        <table id="tables" class="table table-bordered dt-responsive w-100">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Kode Prodi</th>
                                    <th>Tahun Lulus</th>
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

<div class="modal fade" id="detail123Modal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailModalLabel">Detail Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" >
                <div class="row" id="viewer">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
                'url'       : '<?php echo base_url('admin/report/fetchSurvey') ?>',
                'dataSrc'   : 'data',
                'type'      : 'POST'
            },
            'processing'    : true,
            'serverSide'    : true,
            'ordering'      : false,
        });
    });

    function detail(id) {
        $.LoadingOverlay('show');
        $.post('<?php echo base_url('admin/report/detailSurvey') ?>', {'id': id}, function(data, textStatus, xhr) {
            $.LoadingOverlay("hide");
            $('#viewer').html(data);
            $('#detail123Modal').modal('show');
        }, 'html');        
    }
</script>
<?= $this->endSection() ?>
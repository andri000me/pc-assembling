<div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Master Mouse
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-circle-o"></i> Master Rakit</a></li>
            <li><a> Mouse</a></li>
            <li><a> Master Mouse</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <a href="<?= base_url('Mouse/tambah_mouse') ?>" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Mouse</a>
                        <div class="box-tools">
                            <div class="input-group input-group hidden-xs" style="width: 200px; margin-top:5px;">
                                <form action="<?= base_url('Mouse/search_mouse') ?>" method="post">
                                    <input type="text" name="keyword" class="form-control pull-right" placeholder="Search">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="box-body table-responsive">
                        <table class="table table-striped table-bordered">
                            <tr>
                                <th class="text-center" scope="col" width="10px;">No</th>
                                <th scope="col">ID Mouse</th>
                                <th scope="col">Mouse</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                            <?php $no = 1;
                                                foreach ($mouse as $v) : ?>
                                <tr>
                                    <td class="text-center" scope="row"><?= $no++ ?></td>
                                    <td scope="row"><?= $v->mouse_id ?></td>
                                    <td scope="row"><?= $v->nama_mouse ?></td>
                                    <td scope="row" class="text-center">
                                        <a href="<?= base_url('Mouse/ubah_mouse/') . $v->mouse_id ?>"><span class="label label-info"><i class="fa fa-pencil"></i> Ubah</span></a>
                                        <a class="tombol-hapus" href="<?= base_url('Mouse/hapus_mouse/') . $v->mouse_id ?>"><span class="label label-danger"><i class="fa fa-trash"></i> Hapus</span></a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        <ul class="pagination pagination-sm no-margin pull-right">
                            <!-- Pagination -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
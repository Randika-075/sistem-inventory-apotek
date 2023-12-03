<?= $this->extend('layouts/admin/app') ?>
<?= $this->section('title') ?>
Obat Masuk
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="card m-3">
    <div class="card-header">
    <div class="row">
    <div class="col-lg-12">
        <p class="card-title">Data Obat Masuk</p>
        <a class="btn btn-success float-right" href="<?= route_to('data_masuk/create') ?>">Tambah</a>
    </div>
    </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example3" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Jumlah Stok</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($datamasuk as $datamasuk) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $datamasuk['kode_obat'] ?></td>
                    <td><?= $datamasuk['nama_obat'] ?></td>
                    <td><?= $datamasuk['stok'] ?></td>
            
                    <td class="manage-row">
                        <a href="<?= route_to('data_masuk/edit', $datamasuk['id']) ?>" class="edit-button badge badge-light">
                            <i class="fas fa-edit" style="color: #005eff;"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Kode Obat</th>
                    <th>Nama Obat</th>
                    <th>Jumlah Stok</th>
                    <th>Option</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>
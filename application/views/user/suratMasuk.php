<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div> -->

    <hr class="border-dark border-5 mt-1">
<<<<<<< HEAD
    <a href="<?= base_url('user/tambahSuratMasuk'); ?>" class="btn btn-primary mb-3">
        <i class="fas fa-envelope-open-text"></i>
        Tambah Surat Masuk Baru
=======
    <a href="<?= base_url('user/tambahSuratMasuk') ;?>" class="btn btn-primary mb-3">
    <i class="fas fa-envelope-open-text"></i>
    Tambah Surat Masuk Baru
>>>>>>> 6b1dea5a05a28b66a32e9468ebc145e1d5c09398
    </a>

    <div class="input-group rounded mb-3 mr-lg-5">
        <input type="search" class="rounded mr-2 border-0" placeholder="Search" aria-label="Search" aria-describedby="search-addon">
        <!-- <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
        aria-describedby="search-addon" /> -->
        <span class="input-group-text border-0" id="search-addon">
            <i class="fas fa-search"></i>
        </span>
    </div>

    <!-- <div class="dropdown show mb-3">
        <span>Show : </span>
        <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
        id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
        </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" option value="10">10</a>
            <a class="dropdown-item" option value="50">50</a>
            <a class="dropdown-item" href="#">100</a>
            </div>
    </div> -->

    <!-- <table class="table table-bordered table-striped">
        <thead class="table-dark">
        <tr>
            <th class="text-center">No. Urut</th>
            <th class="text-center">Tgl</th>
            <th class="text-center">No. Agenda</th>
            <th class="text-center">Tgl. Surat Masuk</th>
            <th class="text-center">No. Surat</th>
            <th class="text-center">Alamat Pengirim</th>
            <th class="text-center">Perihal Surat</th>
            <th colspan="4" class="text-center">Aksi</th>
        </tr>
        </thead> -->
<<<<<<< HEAD
    <table id="tes" class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">No. Surat</th>
                <th class="text-center">Tgl Surat Keluar</th>
                <th class="text-center">Pengirim</th>
                <th class="text-center">Penerima</th>
                <th class="text-center">Perihal</th>
                <th class="text-center">Disposisi</th>
                <th colspan="4" class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($surat_masuk as $sm) : ?>
                <tr>
                    <td scope="row" class="text-center"><?= $i; ?></td>
                    <td class="text-center"><?= $sm['no_surat']; ?></td>
                    <td class="text-center"><?= $sm['tgl_suratMasuk']; ?></td>
                    <td class="text-center"><?= $sm['pengirim']; ?></td>
                    <td class="text-center"><?= $sm['penerima']; ?></td>
                    <td class="text-center"><?= $sm['perihal']; ?></td>
                    <td class="text-center"><?= $sm['disposisi']; ?></td>
                    <td class="text-center">
                        <a class="btn btn-sm btn-success mb-3" href="">Update</a>
                        <a class="btn btn-sm btn-danger mb-3" href="">Delete</a>
                        <a class="btn btn-sm btn-warning mb-3" href="">Print</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
=======
        <table id="tes" class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">No</th>
                            <th class="text-center">No. Surat</th>
                            <th class="text-center">Tgl Surat Keluar</th>
                            <th class="text-center">Pengirim</th>
                            <th class="text-center">Penerima</th>
                            <th class="text-center">Perihal</th>
                            <th class="text-center">Disposisi</th>
                            <th colspan="4" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($surat_masuk as $sm) : ?>
                            <tr>
                                <td scope="row" class="text-center"><?= $i; ?></td>
                                <td class="text-center"><?= $sm['no_surat']; ?></td>
                                <td class="text-center"><?= $sm['tgl_suratMasuk']; ?></td>
                                <td class="text-center"><?= $sm['pengirim']; ?></td>
                                <td class="text-center"><?= $sm['penerima']; ?></td>
                                <td class="text-center"><?= $sm['perihal']; ?></td>
                                <td class="text-center"><?= $sm['disposisi']; ?></td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-success mb-3" href="">Update</a>
                                    <a class="btn btn-sm btn-danger mb-3" href="">Delete</a>
                                    <a class="btn btn-sm btn-warning mb-3" href="">Print</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
>>>>>>> 6b1dea5a05a28b66a32e9468ebc145e1d5c09398
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
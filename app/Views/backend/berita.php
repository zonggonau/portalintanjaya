<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container-fluid" x-data="{ open: false, view:true }">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <button
        x-on:click="open = !open; view = !view"
        class="btn btn-primary mb-3"
        x-text="open ? 'Lihat Data' : 'Tambah Berita'">
    </button>
    <div class="row" x-show="view">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>News ID</th>
                        <th>Judul</th>
                        <th>Konten</th>
                        <th>Kategori</th>
                        <!-- <th>Thumbnail</th> -->
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['news'] as $item) : ?>
                        <tr>
                            <td><?= $item['news_id'] ?></td>
                            <td><?= $item['judul'] ?></td>
                            <td><?= $item['konten'] ?></td>
                            <td><?= $item['kategori'] ?></td>
                            <!-- <td>
                                <img src="<?= $item['thumbnail'] ?? base_url('assets/img/about.jpg') ?>" alt="Thumbnail" style="width: 200px; height: 150px;">
                            </td> -->
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="#" class="btn btn-sm btn-success">View</a>
                                    <a href="#" class="btn btn-sm btn-info">Edit</a>
                                    <a href="#" class="btn btn-sm btn-warning">Draft</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>


    <div class="row" x-show="open">
        <div class="col-12">
            <form action="<?= base_url('news/add') ?>" method="post">
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" name="judul">
                </div>
                <div class="form-group">
                    <label for="konten">Konten</label>
                    <textarea class="form-control" id="konten" name="konten" rows="4"></textarea>
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <select class="form-control" id="kategori" name="kategori">
                        <?php foreach ($data['kategori'] as $item) : ?>
                            <option value="<?= $item['kategori_id'] ?>"><?= $item['nama'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="thumbnail">Thumbnail</label>
                    <input type="text" class="form-control" id="thumbnail" name="thumbnail">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>




<?= $this->endSection('backend') ?>
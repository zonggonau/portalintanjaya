<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->setVar('segment', $segment)->include('backend/config/pageheading') ?>
    <a href="<?= base_url('/dashboard/post/add') ?>" class="btn btn-primary">Create Post</a>
    <div class="row pt-3">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>News ID</th>
                        <th>Tanggal</th>
                        <th>Judul</th>
                        <!-- <th>Konten</th> -->
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($news as $item) : ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $item->publish_date ?></td>

                            <td> <a href="<?= base_url('/dashboard/berita/' . $item->slug) ?>"><?= $item->judul ?></a></td>

                            <td><?= $item->nama_kategori ?></td>
                            <!-- <td>
                                <img src="<?= base_url($item->thumbnail ?? 'assets/img/about.jpg') ?>" alt="Thumbnail" style="width: 150px; height: 80px;">
                            </td> -->
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="<?= base_url('/dashboard/post/edit/' . $item->id) ?>" class="btn btn-sm btn-success">Edit</a>&nbsp;&nbsp;&nbsp;
                                    <a href="#" class="btn btn-sm btn-warning"><?= $item->status ?></a>&nbsp;&nbsp;&nbsp;
                                    <a href="<?= base_url('/dashboard/delete/' . $item->id) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</a>
                                </div>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>




<?= $this->endSection('backend') ?>
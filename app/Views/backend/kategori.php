<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->include('backend/config/pageheading') ?>

    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Kategori
    </button> -->
    <div class="row pt-3">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nomor</th>

                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($kategori as $item) : ?>
                        <tr>
                            <td><?= $i ?></td>



                            <td><?= $item['nama_kategori'] ?></td>
                            <!-- <td>
                                <img src="<?= base_url($item->thumbnail ?? 'assets/img/about.jpg') ?>" alt="Thumbnail" style="width: 150px; height: 80px;">
                            </td> -->
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <!-- <a href="<?= base_url('/dashboard/post/edit/' . $item['id']) ?>" class="btn btn-sm btn-success">Edit</a>&nbsp;&nbsp;&nbsp; -->
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $item['id']; ?>" data-nama="<?= $item['nama_kategori']; ?>">
                                        Edit
                                    </button>

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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="/dashboard/kategori/save" method="post" enctype="multipart/form-data">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control <?= (session('errors.kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori" value="<?= old('kategori') ?>" maxlength="255">
                            <?php if (session('errors.kategori')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.kategori') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
            </form>
        </div>
    </div> -->
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="/dashboard/kategori/update" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="PUT">
                    <?= csrf_field() ?>
                    <input type="hidden" id="edit-id" name="id">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="edit-nama-kategori" class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control <?= (session('errors.kategori')) ? 'is-invalid' : '' ?>" id="edit-nama-kategori" name="kategori" value="">
                            <?php if (session('errors.kategori')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.kategori') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>




</div>





<?= $this->endSection('backend') ?>
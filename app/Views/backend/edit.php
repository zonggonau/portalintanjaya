<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->include('backend/config/pageheading') ?>

    <div>
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="container mt-5">
                    <h2 style="font-weight: 900;">Edit Post</h2>

                    <?php if (session()->has('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="/dashboard/update/<?= $post['id'] ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3 d-flex justify-content-end col-12">
                            <button type="submit" class="btn btn-primary">publish</button>
                        </div>
                        <hr />
                        <?= csrf_field() ?>
                        <input type="hidden" name="_method" value="PUT">

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control <?= (session('errors.judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= old('judul', $post['judul']) ?>" maxlength="255">
                            <?php if (session('errors.judul')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.judul') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="summernote" class="form-label">Konten</label>
                            <textarea class="form-control <?= (session('errors.konten')) ? 'is-invalid' : '' ?>" id="summernote" name="konten"><?= old('konten', $post['konten']) ?></textarea>
                            <?php if (session('errors.konten')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.konten') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Thumbnail (Opsional)</label>
                            <input type="file" class="form-control <?= (session('errors.thumbnail')) ? 'is-invalid' : '' ?>" id="thumbnail" name="thumbnail">
                            <?php if ($post['thumbnail']): ?>
                                <img src="<?= base_url($post['thumbnail']) ?>" alt="Thumbnail" class="img-thumbnail mt-2" style="width: 500px;">
                            <?php endif; ?>
                            <?php if (session('errors.thumbnail')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.thumbnail') ?>
                                </div>
                            <?php endif; ?>
                        </div>




                        <div class="row">
                            <div class="mb-3 col-md-4">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control <?= (session('errors.kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach ($kategori as $kat): ?>
                                        <option value="<?= $kat['id'] ?>" <?= (old('kategori', $post['kategori_id']) == $kat['id']) ? 'selected' : '' ?>>
                                            <?= $kat['nama_kategori'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if (session('errors.kategori')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.kategori') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control <?= (session('errors.status')) ? 'is-invalid' : '' ?>" id="status" name="status">
                                    <option value="draft" <?= (old('status', $post['status']) == 'draft') ? 'selected' : '' ?>>Draft</option>
                                    <option value="published" <?= (old('status', $post['status']) == 'published') ? 'selected' : '' ?>>Published</option>
                                    <option value="archived" <?= (old('status', $post['status']) == 'archived') ? 'selected' : '' ?>>Archived</option>
                                </select>
                                <?php if (session('errors.status')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.status') ?>
                                    </div>
                                <?php endif; ?>
                            </div>


                            <div class="mb-3 col-md-4">
                                <label for="publish_date" class="form-label">Tanggal Publikasi</label>
                                <input type="datetime-local" class="form-control <?= (session('errors.publish_date')) ? 'is-invalid' : '' ?>" id="publish_date" name="publish_date" value="<?= old('publish_date', $post['publish_date']) ?>">
                                <?php if (session('errors.publish_date')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.publish_date') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection('backend') ?>
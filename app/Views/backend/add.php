<?= $this->extend('backend/template/layout') ?>
<?= $this->section('backend') ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <?= $this->include('backend/config/pageheading') ?>


    <div>
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="container mt-5">
                    <h2 style="font-weight: 900;">Create Post</h2>

                    <?php if (session()->has('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach (session('errors') as $error): ?>
                                    <li><?= esc($error) ?></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="/dashboard/post/save" method="post" enctype="multipart/form-data">
                        <div class="mb-3 d-flex justify-content-end col-12">
                            <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        <hr />
                        <?= csrf_field() ?>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control <?= (session('errors.judul')) ? 'is-invalid' : '' ?>" id="judul" name="judul" value="<?= old('judul') ?>" maxlength="255">
                            <?php if (session('errors.judul')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.judul') ?>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="mb-3">
                            <label for="sommernote" class="form-label">Konten</label>
                            <textarea class="form-control <?= (session('errors.konten')) ? 'is-invalid' : '' ?>" id="summernote" name="konten"><?= old('konten') ?></textarea>
                            <?php if (session('errors.konten')): ?>
                                <div class="invalid-feedback">
                                    <?= session('errors.konten') ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="thumbnail" class="form-label">Gambar / Thumbnail (Opsional)</label>
                                <input type="file" class="form-control <?= (session('errors.thumbnail')) ? 'is-invalid' : '' ?>" id="thumbnail" name="thumbnail">
                                <?php if (session('errors.thumbnail')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.thumbnail') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="file" class="form-label">File - pdf, doc, ppt, exl (Opsional)</label>
                                <input type="file" class="form-control <?= (session('errors.file')) ? 'is-invalid' : '' ?>" id="file" name="files">
                                <?php if (session('errors.file')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.file') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Kategori Field -->
                            <div class="col-md-3 mb-3">
                                <label for="kategori" class="form-label">Kategori</label>
                                <select class="form-control <?= (session('errors.kategori')) ? 'is-invalid' : '' ?>" id="kategori" name="kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach ($kategori as $kat): ?>
                                        <option value="<?= $kat['id'] ?>" <?= (old('kategori') == $kat['id']) ? 'selected' : '' ?>>
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
                            <div class="col-md-3 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select class="form-control <?= (session('errors.status')) ? 'is-invalid' : '' ?>" id="status" name="status">
                                    <option value="draft" <?= (old('status') == 'draft') ? 'selected' : '' ?>>Draft</option>
                                    <option value="published" <?= (old('status') == 'published') ? 'selected' : '' ?>>Published</option>
                                    <option value="archived" <?= (old('status') == 'archived') ? 'selected' : '' ?>>Archived</option>
                                </select>
                                <?php if (session('errors.status')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.status') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Publish Date Field -->
                            <div class="col-md-3 mb-3">
                                <label for="publish_date" class="form-label">Tanggal Publikasi</label>
                                <input type="datetime-local" class="form-control <?= (session('errors.publish_date')) ? 'is-invalid' : '' ?>" id="publish_date" name="publish_date" value="<?= old('publish_date') ?>">
                                <?php if (session('errors.publish_date')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.publish_date') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="website" class="form-label">Website (Optional)</label>
                                <input type="text" class="form-control <?= (session('errors.website')) ? 'is-invalid' : '' ?>" id="website" name="website" value="<?= old('website') ?>">
                                <?php if (session('errors.website')): ?>
                                    <div class="invalid-feedback">
                                        <?= session('errors.website') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection('backend') ?>
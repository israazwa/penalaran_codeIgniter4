<?php if (session()->getFlashdata('success')): ?>
    <p style="color: green;"><?= session()->getFlashdata('success') ?></p>
    </div>
<?php elseif (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->getFlashdata('error') ?></p>
    </div>
<?php endif; ?>


<div class="container mt-4 mb-3">
    <h3 class="text-center">CRUD Hero Section</h3>
    <div class="container crud_hero">
        <form action="/uploadxfotodashhome" method="post" enctype="multipart/form-data"><?= csrf_field() ?>
            <div class="mb-2">
                <label for="formFile" class="form-label">Input Foto Hero [16:9]/aspek rasio presentasi</label>
                <input class="form-control" type="file" name="image" id="image" required>
            </div>
            <button type="submit" class="btn btn-outline-warning">Upload</button>
        </form>
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>No.</td>
                        <td>Id</td>
                        <td class="text-center">Content</td>
                        <td class="text-center">CRUD</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor = 1; ?>
                    <?php foreach ($data as $key): ?>
                        <tr>
                            <td class="text-center"><?= $nomor; ?></td>
                            <td class="text-center"><?= $key['id']; ?></td>
                            <td><img src="<?php echo base_url($key['content']) ?>" height="72px" width="128px"
                                    alt="error-kode-4"></td>
                            <td>
                                <form action="/homepic/update/<?= $key['id'] ?>" method="post"
                                    enctype="multipart/form-data">
                                    <div class="input-group mb-3">
                                        <button class="btn btn-warning" type="submit"
                                            id="inputGroupFileAddon03">Update!</button>
                                        <input type="file" class="form-control" name="image" id="image"
                                            aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                    </div>
                                </form>
                                <form action=" /homepic/delete/<?= $key['id'] ?>" method="post">
                                    <?= csrf_field() ?>
                                    <button type="submit" class="btn btn-danger mt-1 mb-2"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">Delete!</button>
                                </form>
                            </td>
                        </tr>
                        <?php $nomor++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>



</html>
<style>
    .tombol {
        background-color: rgb(240, 133, 57);
        padding-left: 25px;
        padding-right: 26px;
        padding-top: 5px;
        padding-bottom: 4px;
        border: 0cap;
        margin: 5px 6px;
        color: white;
        border-radius: 3px;
        box-shadow: 3px;
        transition: all 0.3s ease;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.4);
    }

    .tombol:hover {
        background-color: rgb(190, 96, 29);
        transform: scale(0.96);
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.6);
    }
</style>

<body>
    <section>
        <div class="container mt-4">
            <h1 class="text-center mb-5">Admin Dashboard</h1>
            <p class="text-center bg-danger text-white"><b>GUNAKAN LAPTOP!</b></p>
            <div class="ctrl">
                <div class="container">
                    <h2>Control Panel</h2>
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol"
                                onclick="window.location.href='<?php echo base_url('/adminhero'); ?>'">- CRUD
                                -</button>
                            <p class="ms-2">Controller view home</p>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol"
                                onclick="window.location.href='<?php echo base_url('your-target-link'); ?>'">- CRUD
                                -</button>
                            <p class="ms-2">Controller view About</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section>
        <div class="container">
            <h5 class="text-center mb-3">Update Ikhtisar</h5>
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <p style="text-align: justify;" class="text-break mx-5"><?php foreach ($content as $kl) {
                            echo $kl['content'];
                        } ?></p>
                        <p class="text-center"><i><b>styleing</i> gunakan html</b></p>
                    </div>
                    <div class="col">
                        <form action="/adminupdateikhtisar/<?= $kl['id'] ?>" method="post"
                            enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-floating mb-3">
                                <input type="text" name="content" id="content" class="form-control" id="floatingInput"
                                    placeholder="new ikhtisar">
                                <label for="floatingInput">Update Ikhtisar</label>
                            </div>
                            <button type="submit" class="ikhtis">Update!</button>
                            <style>
                                .ikhtis {
                                    background-color: rgb(240, 133, 57);
                                    padding-left: 25px;
                                    padding-right: 26px;
                                    padding-top: 5px;
                                    padding-bottom: 4px;
                                    border: 0cap;
                                    margin: 5px 6px;
                                    color: white;
                                    border-radius: 3px;
                                    box-shadow: 3px;
                                    transition: all 0.3s ease;
                                    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.4);
                                }

                                .ikhtis:hover {
                                    background-color: rgb(70, 98, 8);
                                    transform: scale(0.96);
                                    box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.6);
                                }
                            </style>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


</body>
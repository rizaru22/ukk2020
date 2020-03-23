<?php
    
 ?>
<section class="content">
<div class="row">
    <div class="col-xs-10">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $data['judul_box']; ?></h3>
            </div>
            <div class="box-body">
                <form action="<?= BASEURL; ?>kompetensi/ubah_data/" method="POST">
                <input type="hidden" class="form-control" id="id" name="id" value="<?= $data['kom']['id'] ?>">
                <div class="form-group row">
                    <label for="kode" class="col-sm-2 col-form-label">Kode Kompetensi</label>
                    <div class="col-sm-3">
                         <input type="number" class="form-control" id="kode" name="kode" placeholder="Kode Kompetensi" min="4" required value="<?= $data['kom']['kode_kompetensi'] ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="kompetensi" class="col-sm-2 col-form-label">Kompetensi Keahlian</label>
                    <div class="col-sm-6">
                         <input type="text" class="form-control" id="kompetensi" name="kompetensi" placeholder="Kompetensi Keahlian" required value="<?= $data['kom']['kompetensi_keahlian'] ?>">
                    </div>
                </div>
               
                
            </div>
            <div class="box-footer">
                    <a href="<?= BASEURL; ?>kompetensi/" type="cancel" class="btn btn-warning"><i class="fa fa-close"></i> Cancel</a>
                    <button type="submit" class="btn btn-info pull-right"><i class="fa fa-save"></i> Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</section>

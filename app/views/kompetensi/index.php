<section class="content">
<div class="row">
    <div class="col-lg-12">
        <?php Flasher::flash(); ?>
    </div>

</div>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title"><?= $data['judul_box'] ?></h3>
                <a href="<?=BASEURL; ?>Kompetensi/tambah" class="btn btn-flat btn-success pull-right"><i class="fa fa-plus"></i> Tambah Data</a>
            </div>
            
            <div class="box-body">
      
           <table id="BS_Datatabel" class="table table-bordered table-striped">
           <thead>
           <tr>
                    <th>No.</th>
                   <th>Kode</th>
                   <th>Kompetensi Keahlian</th>
                  
                   <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
           <?php 
           $no=1;
           foreach($data['msy'] as $msy): ?>
               <tr>
                    <td><?= $no;?></td>
                   <td><?= $msy['kode_kompetensi'];?></td>
                   <td><?= $msy['kompetensi_keahlian'];?></td>
                   
                   
                   <td><div class="btn-group" role="group" aria-label="...">
                   <a href="<?=BASEURL; ?>Kompetensi/ubah/<?= $msy['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil-square"></i> Ubah</a>&nbsp;
                   <a href="<?=BASEURL; ?>Kompetensi/hapus/<?= $msy['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Data akan dihapus ?')"><i class="fa fa-trash"></i> Hapus</a>
                   </div></td>
               </tr>
               <?php 
               $no++;
            endforeach; ?>
            </tbody>
           </table>
           </div>
        </div>
    </div>
</div>
</section>

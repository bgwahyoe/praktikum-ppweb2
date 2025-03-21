<div class="container">
    <div class="card">
        <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    require_once("Controllers/kunjungan.php");
                    foreach ($Kunjungan -> index() as $item): ?>
                    <tr>
                        <td></td>
                        <td><?= $item['timestamp']?></td>
                        <td><?= $item['fullname']?></td>
                        <td><?= $item['email']?></td>
                        <td><?= $item['jenis_kunjungan_id']?></td> 
                        <td>
                            <form method="post">
                                <input type="hidden" name="id" value="<?=$item['id']?>">
                                <input type="submit" value="delete" name="type"  class="btn btn-danger btn-sm">
                            </form>
                        </td>
                    </tr>
                    <?php
                    endforeach;
                    if(isset($_POST['type'])) {
                        if($_POST['type'] == "delete") {

                        }
                    }
                    ?>
                  </tbody>  
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
        </div>
    </div>
</div>
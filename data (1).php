<table class="table table-striped table-bordered" style="width:100%">
	<thead>
    	<tr>
        	<td>No</td>
        	<td>Nama</td>
        	<td>Alamat</td>
        	<td>Telepon</td>
			<td>Jam</td>
			
        	<td>1 hari/orang</td>
    	</tr>
	</thead>
	<tbody>
    	<?php
        	include 'config.php';
        	$s_nama="";
        	$s_keyword="";
        	if (isset($_POST['nama'])) {
            	$s_nama = $_POST['nama'];
            	$s_keyword = $_POST['keyword'];
        	}
       	 
        	$search_nama = '%'. $s_nama .'%';
        	$search_keyword = '%'. $s_keyword .'%';
        	$no = 1;
        	$query = "SELECT * FROM puskesmas WHERE Tipe LIKE ? AND (nama LIKE ? OR alamat LIKE ? OR telepon LIKE ? OR jam LIKE ? OR perorang LIKE ?) ORDER BY id DESC LIMIT 100";
        	$dewan1 = $db1->prepare($query);
        	$dewan1->bind_param('ssssss', $search_nama, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
        	$dewan1->execute();
        	$res1 = $dewan1->get_result();
 
        	if ($res1->num_rows > 0) {
            	while ($row = $res1->fetch_assoc()) {
                	$id = $row['id'];
                	$nama = $row['nama'];
                	$alamat = $row['alamat'];
                	$telepon = $row['telepon'];
                	$jam = $row['jam'];
                	$perorang = $row['perorang'];
    	?>
        	<tr>
            	<td><?php echo $no++; ?></td>
            	<td><?php echo $nama; ?></td>
            	<td><?php echo $alamat; ?></td>
            	<td><?php echo $telepon; ?></td>
            	<td><?php echo $jam; ?></td>
            	<td><?php echo $perorang; ?></td>
        	</tr>
    	<?php } } else { ?>
        	<tr>
            	<td colspan='7'>Tidak ada data ditemukan</td>
        	</tr>
    	<?php } ?>
	</tbody>
</table>

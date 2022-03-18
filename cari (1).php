<!-- Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style3.css">
<div class="row mb-3">
	<div class="col-sm-12"><label class="text-bold">Filer dan cari</label></div>
	<div class="col-sm-3">
    	<div class="form-group form-inline">
        	<label>Nama </label>
        	<select name="s_nama" id="s_nama" class="form-control">
            	<option value=""></option>
            	<option value="Puskesmas">Puskesmas</option>
            	<option value="Rumah Sakit">Rumah Sakit</option>
        	</select>
    	</div>
	</div>
	<div class="col-sm-4">
    	<div class="form-group form-inline">
        	<label>Keyword</label>
        	<input type="text" name="s_keyword" id="s_keyword" class="form-control">
    	</div>
	</div>
</div><hr>

<div class="data"></div>

<script>
    $(document).ready(function(){
   	 load_data();
   	 function load_data(nama, keyword)
   	 {
   		 $.ajax({
   			 method:"POST",
   			 url:"data.php",
   			 data: {nama: nama, keyword:keyword},
   			 success:function(hasil)
   			 {
   				 $('.data').html(hasil);
   			 }
   		 });
         }
   	 $('#s_keyword').keyup(function(){
   		 var nama = $("#s_nama").val();
   		 var keyword = $("#s_keyword").val();
   		 load_data(nama, keyword);
   	 });
   	 $('#s_nama').change(function(){
   		 var nama = $("#s_nama").val();
   		 var keyword = $("#s_keyword").val();
   		 load_data(nama, keyword);
   	 });
    });
</script>

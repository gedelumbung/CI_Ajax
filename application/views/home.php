<script type='text/javascript'>
	function simpan_user()
	{
		send_form(document.formmahasiswa,"ajax/simpan","#content");
	}
	function edit(id)
	{
		$('input[name=nama_mhs]').val($('#nama_'+id).val());
		$('input[name=jurusan]').val($('#jurusan_'+id).val());
		$('input[name=angkatan]').val($('#angkatan_'+id).val());
		$('input[name=nim]').val(id);
	}
	$(document).ready(function() {

		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "<?php echo site_url('ajax/hapus')?>",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})


</script>

<form name='formmahasiswa' method='post' action=''>
    <?php
        echo form_hidden('nim');        
    ?>
<table align='center'>
    <tr>
        <td class='a_right'>Nama</td>
        <td class='a_center'>:</td>
        <td><input type='text' name='nama_mhs' size='50' /></td>
    </tr>
    <tr>
        <td class='a_right'>Angkatan</td>
        <td class='a_center'>:</td>
        <td><input type='text' name='angkatan' size='50' /></td>
    </tr>
    <tr>
        <td class='a_right'>Jurusan</td>
        <td class='a_center'>:</td>
        <td><input type='text' name='jurusan' size='50'	 /></td>
    </tr>
</table>
</form>
<div class='paging'>
    <a class='tombol' href='javascript:void(0)' onclick='simpan_user()'>Simpan Data</a>
    <a class='tombol' href='javascript:void(0)' onclick='document.formmahasiswa.reset()'>Reset</a>
</div>
<br>	
<table class='tabel' cellpadding=4 cellspacing=4>
    <tr bgcolor='#ccc'>
        <td>ID User</td>
        <td>Nama Mahasiswa</td>
        <td>Jurusan</td>
        <td>Tahun Angkatan</td>
        <td>Edit - Delete</td>
    </tr>
    <?php foreach($user->result() as $row):?>
    <tr class='content'>
        <td>
            <input type='hidden' id='nim_<?php echo $row->nim;?>' value='<?=$row->nim;?>' />
            <input type='hidden' id='nama_<?php echo $row->nim;?>' value='<?=$row->nama_mhs;?>' />
            <input type='hidden' id='jurusan_<?php echo $row->nim;?>' value='<?=$row->jurusan;?>' />
            <input type='hidden' id='angkatan_<?php echo$row->nim;?>' value='<?=$row->angkatan;?>' />
            <?php echo $row->nim; $nim=$row->nim;?>
        </td>
        <td><?php echo $row->nama_mhs;?></td>
        <td><?php echo $row->jurusan;?></td>
        <td><?php echo $row->angkatan;?></td>
        <td>
            <a href='javascript:void(0)' onclick='edit(<?php echo $row->nim; ?>)' >Edit</a>
             - 
            <a href='#'	class="delbutton" id="<?php echo $row->nim; ?> href="#" >Hapus</a>
        </td>
    </tr>
    <?php endforeach;?>
</table>


<div class='paging'>
    <?php
    $str = '';
    $br = '';
    if(!isset($no_prev))
    {
        $br = '<br />';
        $str .= $prev;
    }
    if(!isset($no_next))
    {
        $br = '<br />';
        if(!isset($no_prev))
        {
            $str .= ' - ';
        }
        $str .= $next;
    }
    echo $br.$str;
    ?>
</div>


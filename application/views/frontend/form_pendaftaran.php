<?php echo validation_errors();?>
<?php echo form_open('front/pendaftaran','id=form_pendaftaran');?>

<input type="text" name="nouan" value="" id="nouan"/><br/>
<input type="text" name="nama" value="" id="nama" /><br/>
<input type="text" name="tempat_lahir" value="" id="tempat_lahir" /><br/>
<input type="text" name="tanggal_lahir" value="" id="tanggal_lahir"/><br/>
<input type="radio" name="jenis_kelamin" value="1" id="jenis_kelamin"/> Laki-Laki 
<input type="radio" name="jenis_kelamin" value="0" id="jenis_kelamin"/> Perempuan <br/>
<select name="agama" id="agama">
    <option>Pilih</option>
</select>
<textarea name="alamat" id="alamat"></textarea><br/>

<input type="text" name="notelp" value="" id="notelp"/>
<input type="text" name="sekolahasal" value="" id="sekolahasal"/><br/>
<textarea name="alamatsekolah" id="alamatsekolah"></textarea>
<br/>

<input type="text" name="tahunlulus" value="" id="tahunlulus"/><br/>
<input type="text" name="nostl" value="" id="nostl"/><br/>
<input type="text" name="namawali" value="" id="namawali"/><br/>
<textarea name="alamatwali" id="alamatwali"></textarea><br/>


<input type="text" name="notelpwali" value="" id="notelpwali"/><br/>
<input type="text" name="pekerjaanwali" value="" id="pekerjaanwali" /><br/>
<input type="button" value="Daftar" onclick="pendaftaran('<?php echo site_url();?>/front/submitpendaftaran','#content')">
<?php echo form_close();?>
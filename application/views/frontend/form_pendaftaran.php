
<?php echo form_open('front/pendaftaran', 'id=form_pendaftaran'); ?>
<table border="0">
    <thead>
        <tr>

            <td>Nomor UAN SMP</td>   <td><input type="text" name="nouan" value="" id="nouan" size="50"/><?php echo form_error('nouan'); ?><i id="cek"></i></td>
        </tr><tr>            
            <td>Nama lengkap </td> <td><input type="text" name="nama" value="" id="nama" /><?php echo form_error('nama'); ?></td>
        </tr><tr>         
            <td>Tempat Lahir </td>     <td><input type="text" name="tempat_lahir" value="" id="tempat_lahir" /><?php echo form_error('tempat_lahir'); ?></td>
        </tr><tr>           
            <td>Tanggal Lahir</td>     <td><input type="text" name="tanggal_lahir" value="" id="tanggal_lahir"/><?php echo form_error('tanggal_lahir'); ?></td>
        </tr><tr>            
            <td>Jenis Kelamain</td> <td><input type="radio" name="jenis_kelamin" value="1" id="jenis_kelamin" checked="true"/> Laki-Laki 
                <input type="radio" name="jenis_kelamin" value="0" id="jenis_kelamin"/> Perempuan</td>
        </tr><tr>            
            <td>Agama :</td>   <td><select name="agama" id="agama">
                    <option value="1">Islam</option>
                    <option value="2">Katolik</option>
                    <option value="3">kristen</option>
                    <option value="4">Budha</option>
                    <option value="5">Hindu</option>
                </select>
            </td>

        </tr><tr>          
            <td>Alamat tinggal</td>   <td><textarea name="alamat" id="alamat"></textarea><?php echo form_error('alamat'); ?></td>
        </tr><tr>  
            <td>Telp /HP  </td>
            <td><input type="text" name="notelp" value="" id="notelp"/></td>
        </tr><tr>  
            <td>Sekolah Asal </td>    <td><input type="text" name="sekolahasal" value="" id="sekolahasal"/><?php echo form_error('sekolahasal'); ?></td>
        </tr><tr>  
            <td>Alamat Sekolah</td>      <td><textarea name="alamatsekolah" id="alamatsekolah"><?php echo form_error('alamatselkolahan'); ?></textarea>
            </td>
        </tr><tr>  

            <td>Tahun Lulus </td>   <td><input type="text" name="tahunlulus" value="" id="tahunlulus"/><?php echo form_error('tahunlulus'); ?></td>
        </tr><tr>  
        </tr><tr>   <td>Nomor Surat Tanda Lulus</td>      <td><input type="text" name="nostl" value="" id="nostl"/></td>
        </tr><tr>   <td>Nama Wali /Orang Tua</td>             <td><input type="text" name="namawali" value="" id="namawali"/><?php echo form_error('namawali'); ?></td>
        </tr><tr>   <td>Alamat Wali/ Orang Tua</td>    <td><textarea name="alamatwali" id="alamatwali"></textarea></td>
        </tr><tr>   <td>Telp/HP</td><td><input type="text" name="notelpwali" value="" id="notelpwali"/></td>
        </tr><tr>   <td>Pekerjaan wali</td>  <td><input type="text" name="pekerjaanwali" value="" id="pekerjaanwali" /></td>

        </tr><tr>  <td></td>
            <td>

                <input type="button" value="Daftar" onclick="pendaftaran('<?php echo site_url(); ?>/front/submitpendaftaran','#content')" />
            </td><?php echo form_close(); ?>
        </tr> 
</table>

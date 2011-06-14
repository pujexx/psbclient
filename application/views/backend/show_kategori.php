<ul id="kategori_list">
    <?php foreach ($kategories as $kategori) {
    ?>
    <?php echo "<li class='list_kategori_" . $kategori['id_kategori'] . "'>"; ?>
        <a href="#" onclick="delete_kategori(<?php echo $kategori['id_kategori'] ?>,'.list_kategori_<?php echo $kategori['id_kategori'] ?>')">Delete</a>|<a href="#" onclick="edit_kategori('<?php echo $kategori['id_kategori'] ?>','<?php echo $kategori['kategori']; ?>');">Edit</a>
    <?php echo $kategori['kategori'] . "</li>"; ?>

    <?php } ?>

</ul>
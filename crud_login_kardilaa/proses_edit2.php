<?php
 $db = new PDO("mysql:host=localhost;dbname=rumahsakit",'root','');
 $query = $db->query('select * from tb_user');

 while ($data = $query->fetch() ) :?>
    <p>
        <a href="edit.php?id=<?= $data['id']; ?>">
            <?= $data['nama'] ?>
        </a>
        
        <a href="proses_edit.php?id=<?= $data['id']; ?>" style="color:white;background:red;padding:2px;border-radius:3px">
            Hapus
        </a>
    </p>
<?php endwhile ?>
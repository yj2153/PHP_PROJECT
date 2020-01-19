<?php 

//問い合わせを取得
$gallery = null;
if(isset($_REQUEST['listNum'])){
    $gallerys = $db->prepare('SELECT g.* FROM gallery g WHERE g.id = ? ');
    $gallerys->execute(array($_REQUEST['listNum']));
    $gallery = $gallerys->fetch();
}


?>

<div id="content">
    <form action="" method="post">
        <table id="viewTbl">
            <tr>
                <td><?php echo h($settings->gallery['gallery_title']); ?></td>
                <td colspan="2"><?php echo h($gallery['title']); ?></td>
            </tr>
            <tr>
                <td colspan="2">
                <img src="./resource/image/<?php echo h($gallery['picture']); ?>" width="100" height="100" alt=""/>
                </td>
            </tr>
        </table>
    </form>
</div>
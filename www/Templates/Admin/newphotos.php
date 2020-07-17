<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Novas Fotos</h1>
    <form action="<?=url("admin/noticias/fotos/$news_id->news_id")?>" method="post">
        <div class="form-group">
            Fotos:
            <input type="file" accept="image/jpeg, image/jpg, image/png" name="fotos[]" multiple>
        </div>
        <div class="form-group">
            <input type="hidden" name="news_id" value="<?=$news_id->news_id;?>">
        </div>
        <div class="form-group">
            <button type="submit">Enviar</button>
        </div>
    </form>
</div>
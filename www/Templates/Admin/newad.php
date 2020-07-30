<?php 
    $v->layout("_main.php"); 
    date_default_timezone_set("America/Sao_Paulo");
?>

<div class="p-5 text-center news-form">
    <h1> Criando novo Anúncio</h1>
    <form action="<?=url("admin/anuncios/novo")?>" method="post" enctype="multipart/form-data">
         <div class="row m-0 text-center">
            <label for="thumb" class="file-label form-control">Escolha a imagem para o anúncio</label>
            <input type="file" name="thumb" class="d-none" id="thumb"/>
        </div>
        <div class="row m-0 text-center">
            <input type="text" name="description" class="col-12 caption" placeholder="Texto do anúncio">
        </div>
        <div class="row m-0 text-center">
            <input type="text" name="link" class="col-12 caption" placeholder="Link do anúncio">
        </div>
       
        <button type="submit" class="w-50 submit">Salvar Anúncio</button>
    </form>
</div>

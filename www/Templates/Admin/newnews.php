<?php 
    $v->layout("_main.php"); 
?>

<div class="form-div">
    <h1>Nova Notícia</h1>
    <form action="<?=url("admin/noticias/nova")?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <input type="hidden" name="thumb" value="30000">
            <input type="file" name="thumb" />
        </div>
        <div class="form-group">
            <input type="text" name="title" placeholder="Título">
        </div>
        <div class="form-group">
            <input type="text" name="caption" placeholder="Subtítulo">
        </div>
        <div class="form-group">
            <input type="text" name="content" placeholder="Conteúdo">
        </div>
        <div class="form-group">
            <input type="text" name="tag" placeholder="TAG">
        </div>
        <div class="form-group">
            <input type="date" name="date">
        </div>
        <div class="form-group">
            <input type="text" name="branch" placeholder="Filial">
        </div>
         <div class="form-group">
            <input type="text" name="category" placeholder="Categoria">
        </div>
        <div class="form-group">
            <button type="submit">Cadastrar</button>
        </div>
    </form>
</div>


<!--?php
$uploaddir = '/var/www/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Arquivo válido e enviado com sucesso.\n";
} else {
    echo "Possível ataque de upload de arquivo!\n";
}

echo 'Aqui está mais informações de debug:';
print_r($_FILES);

print "</pre>";

?>
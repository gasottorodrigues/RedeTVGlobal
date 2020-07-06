<?php 
    $v->layout("_main.php"); 
    date_default_timezone_set("America/Sao_Paulo");
?>

<div class="p-5 text-center news-form">
    <h1> Criando nova notícia</h1>
    <form action="<?=url("admin/noticias/nova")?>" method="post" enctype="multipart/form-data">
         <div class="row m-0 text-center">
            <input type="text" name="title" class="col-12 title" placeholder="Título">
        </div>
        <div class="row m-0 text-center">
            <input type="text" name="caption" class="col-12 caption" placeholder="Subtítulo">
        </div>
        <div>
            <textarea name="content" id="content" class="content" placeholder="Redação"></textarea>
        </div>
       
        <div class="row mx-0 my-3">
            <div class="col-lg-3 col-12">
                <label for="thumb" class="file-label form-control">Escolha a imagem para a thumb</label>
                <input type="file" name="thumb" class="d-none" id="thumb"/>
            </div>
            <div class="col-lg-3 col-12">
                <select name="category" class="form-control" id="categorias">
            <?php
                if($cats):
                    foreach($cats as $cat):
            ?>
                    <option value="<?=$cat->cat_id;?>"><?=$cat->description;?></option>
            <?php
                    endforeach;
                else:
            ?>
                <option value="0">Sem opções</option>
                
            <?php endif; ?>
                </select>
            </div>
            <div class="col-lg-3 col-12">
                <select name="branch" class="form-control" id="branch">
            <?php
                if($branches):
                    foreach($branches as $branch):
            ?>
                    <option value="<?=$branch->branch_id;?>"><?=$branch->name;?></option>
            <?php
                    endforeach;
                else:
            ?>

                <option value="0">Sem opções</option>

            <?php endif; ?>
                </select>
            </div>
            <div class="col-lg-3 col-12">
                <input type="date" name="date"  class="form-control" value="<?=date("Y-m-d")?>">
            </div>
        </div>
        <button type="submit" class="w-50 submit">Salvar Notícia</button>
    </form>
</div>

<?php $v->start("scripts") ?>
    <script src="<?=url("Templates/Admin/js/ckeditor/ckeditor.js")?>"></script>
    <script>
        window.onload = function() {
                CKEDITOR.replace( 'content' );
        };
    </script>
<?php $v->end() ?>

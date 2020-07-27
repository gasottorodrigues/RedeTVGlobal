<?php

	$v->layout("_main.php"); 
    
    if($news):
    ?>
	<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <!-- <th scope="col">Thumb</th> -->
          <th scope="col">Categoria</th>
          <th scope="col">Região</th>
          <th scope="col">Data</th>
        </tr>
      </thead>
      <tbody>
         <?php
                foreach($news as $new): 
         ?>
                <tr>
                  <th scope="row"><?=$new->news_id;?></th>
                  <td><?=$new->title;?></td>
                  <!-- <td><img class="img-fluid" src="//url($new->thumb_url)"></td> -->
                  <td><?=$new->category?></td>
                  <td><?=$new->branch?></td>
                  <td><?=$new->date;?></td>
                  <td><a href="<?=url("admin/noticias/alter/{$new->news_id}")?>" class="fa fa-pencil-square-o"></a></td>
                    <td>
                      <a href="<?=url("admin/noticias/delete/{$new->news_id}")?>" class="fa fa-times-circle"></a>
                    </td>
                </tr>
            <?php
                endforeach;
           
            ?>
      </tbody>
    </table>

    <?php
    else:
    ?>
         <div class="alert alert-danger">
            <h1 style="text-align: center;">Sem notícias cadastradas.</h1>
         </div>
    <?php
    endif;
    ?>
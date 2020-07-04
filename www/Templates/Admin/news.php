<?php

	$v->layout("_main.php"); 
    
    if($news):
    ?>
	<table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Título</th>
          <th scope="col">Subtítulo</th>
          <th scope="col">Redação</th>
          <th scope="col">Thumb</th>
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
              <td><?=$new->caption;?></td>
              <td><?=$new->content;?></td>
              <td><?=$new->thumb_url;?></td>
              <td><?=$new->category;?></td>
              <td><?=$new->branch;?></td>
              <td><?=$new->date;?></td>
              <td><a href="<?=url("admin/noticias/delete/{$new->news_id}")?>">&times;</a></td>
              <td><a href="<?=url("admin/noticias/alter/{$new->news_id}")?>">0</a></td>
            </tr>
        <?php
            endforeach;
        ?>
      </tbody>
    </table>

    <?php
    else:
    ?>
         <div>
            <h1>Sem notícias cadastradas</h1>
         </div>
    <?php
    endif;
    ?>
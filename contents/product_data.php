<?php  
require_once '../functions.php';
if(@$_GET['keyword'] == @$_POST['keyword']):
    if(searchData(@$_POST['keyword'])):
      usleep(700000);
      $viewData = searchData(@$_POST['keyword']);
    endif;
endif;
?>


<?php if(empty($viewData)): ?>
  <tr>
    <td colspan="3">No data on this table product</td>
  </tr>
<?php endif; ?>

 <?php $no=1; foreach($viewData as $view): ?>
    <tr>
      <th scope="row"><?=$no?></th>
      <td><?=$view['product_code']?></td>
      <td><?=$view['product_name']?></td>
      <td><?=$view['product_price']?></td>
      <td>
        <button id="<?=$view['id']?>" class="edit btn btn-danger btn-sm"><i class='fas fa-edit'></i></button>
        <button id="<?=$view['id']?>" class="del btn btn-info btn-sm"><i class='fas fa-eraser'></i></button>
      </td>
    </tr>
<?php $no++; endforeach; ?>
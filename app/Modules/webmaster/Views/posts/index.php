<div class="row">
    <div class="col s12">
    <nav>
        <div class="nav-wrapper red lighten-2">
            <div class="col s9">
                <a href="<?php __url(MODULE_ALIAS);?>" class="breadcrumb" target="_self"><i class="material-icons">home</i> Dashboard</a>
                <a class="breadcrumb">Posts</a>
            </div>
            
            <div class="col s3 nobreadcrumbs ">
                <div class="right">
                    <a href="<?php __url(MODULE_ALIAS.'/posts/add');?>" class="blue btn-floating pulse" target="_self"><i class="material-icons small-icons">add</i></a>
                    <!-- <a href="<?php __url(MODULE_ALIAS.'/posts/delete/bulk');?>" class="blue btn-floating pulse" target="_self"><i class="material-icons small-icons">delete</i></a> -->
                    <a href="<?php __url(MODULE_ALIAS.'/posts');?>" class="blue btn-floating pulse" target="_self"><i class="material-icons small-icons">refresh</i></a>
                </div>
            </div>

        </div>
    </nav>

    <?php __flashSession();?>

    <div class="card-panel">
      <table class="striped responsive-table ">
        <thead>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Created On</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
            <?php if(isset($data) && count($data) ){
            foreach ( $data as $page ) {?>
                <tr>
                    <td><?php __($page['id']);?></td>
                    <td><?php __($page['title']);?></td>
                    <td><?php __($page['created']);?></td>
                    <td>
                        <a href="<?php __url(MODULE_ALIAS.'/posts/view/'.$page['id']);?>" target="_self"><i class="material-icons dp48">visibility</i></a>
                        <a href="<?php __url(MODULE_ALIAS.'/posts/edit/'.$page['id']);?>" target="_self"><i class="material-icons dp48">edit</i></a>
                        <?php __form(MODULE_ALIAS.'/posts/delete/'.$page['id'], ['class' => 'col inline-form', 'target' => '_self', 'id' => 'page_'.$page['id']]);?>
                            <input type="hidden" name="submit" value="delete">
                            <button type="submit" class="noborder" target="_self" onclick="return confirm('Do you really want to delete?');"><i class="material-icons dp48 red-text">delete</i></button>
                        </form>
                    </td>
                </tr>
            <?php }
        } else{
            echo '<tr><td colspan="4">No Record found!</td></tr>';
        }?>
        </tbody>
      </table>

  <ul class="pagination">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
            
</div>
    </div>
</div>

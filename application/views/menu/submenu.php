<!-- Begin Page Content -->
<div class="container-fluid">

      
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>




<div class="row">
	<div class="col-lg">
		
		<?php if (validation_errors()) : ?>
			<div class="alert alert-danger" role="alert">
			<?= validation_errors(); ?>
			</div>
		<?php endif; ?>

		<?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

		<?= $this->session->flashdata('message');  ?>



		<a href="" class="btn btn-info" data-toggle="modal" data-target="#submenu">Tambahkan Sub Menu Baru</a>
			

		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Title</th>	      
		      <th scope="col">Menu</th>
		      <th scope="col">url</th>
		      <th scope="col">icon</th>
		      <th scope="col">active</th>
		      <th scope="col">action</th>

		    
		    </tr>
		  </thead>
		  <tbody>
			
			<?php $a=1; ?>
			<?php foreach ($subMenu as $sub): ?>

		    <tr>
		      <th scope="row"><?= $a++; ?></th>
		      <td><?= $sub['title']; ?></td>
		      <td><?= $sub['menu']; ?></td>
		      <td><?= $sub['url']; ?></td>
		      <td><?= $sub['icon']; ?></td>
		      <td><?= $sub['is_active']; ?></td>
		      <td>
		      	<a href="" class="badge badge-primary">edit</a>
		      	<a href="" class="badge badge-danger">delete</a>

		      </td>
		      
		    </tr>

			<?php endforeach; ?>

		  </tbody>
		</table>


	
	</div>
</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



<!-- Modal -->
<div class="modal fade" id="submenu" tabindex="-1" role="dialog" aria-labelledby="submenu" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="submenu">Halaman Tambah Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    <form action="<?= base_url('/menu/submenu') ?>" method="post">
    <div class="modal-body">


   	<div class="form-group">
	    <input type="text" class="form-control" id="title" placeholder="Submenu title" name="title">
  	</div>
  	<div class="form-group">

		<select name="menu_id" id="menu-id" class="form-control">
			<option value="">select menu</option>
		<?php foreach ($menu as $m) : ?>
			<option value="<?= $m['id']; ?>"> <?= $m['menu']; ?></option>
		<?php endforeach; ?>
		</select>

  	</div>

  	<div class="form-group">
	    <input type="text" class="form-control" id="url" placeholder="Submenu url" name="url">
  	</div>
        	
	<div class="form-group">
	    <input type="text" class="form-control" id="icon" placeholder="Submenu icon" name="icon">
  	</div>


  	<div class="form-group">
  		<div class="form-check">
  			<div class="custom-control custom-checkbox">
			  <input type="checkbox" class="custom-control-input" name="is_active" id="is_active" value="1" checked>
			  <label class="custom-control-label" for="customCheck1" for="is_active">Aktif ?</label>
			</div>
  		</div>
  	</div>
	
	
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
      </div>
    </div>
  </div>
</div>
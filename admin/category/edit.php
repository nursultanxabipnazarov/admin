<?php
include '../layout/header.php';
include  __DIR__.'/../../app/controllers/category.php';

?>



<div class="container-fluid">
  <div class="row">
    <?php
    include("../layout/nav.php");
    ?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>


    
      <div class="table-responsive">
       

      <div class="col-md-3 col-md-offset-2">
	        
    		<h1>Create post</h1>
    		
    		<form action="" method="POST">
    		    
    		
    		    
    		    <div class="form-group">
    		        <label for="title">Category name <span class="require">*</span></label>
    		        <input type="text"  value="<?=$category[0]['name'] ?>" class="form-control" name="name" />
    		    </div>
    		    <input type="hidden" name="id" value="<?=$category[0]['id'] ?>" >
    		    <div class="form-group">
    		        <label for="description">Description</label>
    		        <textarea rows="5" class="form-control"  value="" name="description" ><?=$category[0]['description'] ?></textarea>
    		    </div>
    		    
    		   
    		    
    		    <div class="form-group">
    		        <button type="submit" name="category-update" class="btn btn-primary">
    		            Create
    		        </button>
    		        <button class="btn btn-default">
    		            Cancel
    		        </button>
    		    </div>
    		    
    		</form>
		</div>




      </div>
    </main>
  </div>
</div>


    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>



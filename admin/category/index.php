<?php
include("../layout/header.php");
include  __DIR__.'/../../app/controllers/category.php';


?>



<div class="container-fluid">
    <div class="row">
        <?php
    include '../layout/nav.php';
    ?>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
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


            <h2><a href="create.php" class="btn btn-primary" role="button" data-bs-toggle="button">Add category</a></h2>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                        <th><input type="checkbox" id="checkall" /></th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </thead>
                    <tbody>
                <?php foreach ($categories as $key => $category):?>
                    
                
                        <tr>
                            <td><input type="checkbox" class="checkthis" /></td>
                            <td><?=$category['name'] ?></td>
                            <td><?=$category['description'] ?></td>
                            <td><?=$category['created_at'] ?></td>
                            
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Edit"><button
                                        class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal"
                                        data-target="#edit"><span  class="glyphicon glyphicon-pencil"> <a href="edit.php?edit=<?= $category['id']; ?>">edit</a></span></button>
                                </p>
                            </td>
                            <td>
                                <p data-placement="top" data-toggle="tooltip" title="Delete"><button
                                        class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal"
                                        data-target="#delete"><span class="glyphicon glyphicon-trash"></span></button>
                                </p>
                            </td>
                        </tr>

                        <?php endforeach;?>

                    


                       



                    </tbody>

                </table>






            </div>
        </main>
    </div>
</div>


<script src="/docs/5.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
    integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
</script>
<script src="dashboard.js"></script>
</body>

</html>
<?php
include __DIR__."/../fun.php";



if($_SERVER['REQUEST_METHOD']==='POST' && isset( $_POST['category-create'] )){

    $name = trim( $_POST['name'] );
    $description = trim( $_POST['description'] );
    $category = [
        'name'=> $name,
        'description'=> $description
    ];

    insert('categories', $category);
    header('location: /admin/category/index.php');
}

// index category
$categories = selectAll('categories');



//edit 

if($_SERVER['REQUEST_METHOD']==='GET' && isset( $_GET['edit'] )){
    
    $id = trim( $_GET['edit'] );
 
  
    $category = selectAll('categories',['id'=>$id]);

   
}



//update

if($_SERVER['REQUEST_METHOD']==='POST' && isset( $_POST['category-update'] )){
    
   $id = trim( $_POST['id'] );
   $category = [
        'name'=> trim( $_POST['name'] ),
        'description'=> trim( $_POST['description'] )
   ];

   update('categories',$id, $category);
   header('location: /admin/category/index.php');
}

?>
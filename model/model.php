<?php
//----------------------------
// model
//----------------------------


//require('./database.php');
function dbConnection()
{
    $host = '127.0.0.1';
    $user = 'phpmyadmin';
    $password = 'root';
    $db = 'blog';
    try {
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
    } catch (\Throwable $th) {
        
        echo $th->getMessage();
        
    }
    return $conn;
}

function getCategory($category_id){
    $conn = dbConnection();
    $query_category = 'SELECT * from category where id=?';
    $stmt_category = $conn->prepare($query_category);
    $stmt_category->execute([$category_id]);
    return $stmt_category;
}

function getCategories(){
    $conn = dbConnection();
    $query_category = 'SELECT * from category';
    $stmt_categories = $conn->prepare($query_category);
    $stmt_categories->execute();
    return $stmt_categories;
}

function getPost($post_id)
{
    $conn = dbConnection();
    $query = 'SELECT * from post where id=?';
    $stmt = $conn->prepare($query);
    $stmt->execute([$post_id]);
    $post = $stmt->fetch(PDO::FETCH_OBJ);
    return $post;
}

function getPostsCategory($category_id){
    $conn = dbConnection();
    $query_post = 'SELECT * from post where category_id=?';
    $stmt_post = $conn->prepare($query_post);
    $stmt_post->execute([$category_id]);
    return $stmt_post;
    
}

function getPosts(){
    $conn = dbConnection();
    $query = 'SELECT * from post';
    $stmt = $conn->prepare($query);
    $stmt->execute();
    return $stmt;

}
//--------------------------------------------- main 
$stmt_categories = getCategories();

$stmt = getPosts();
?>

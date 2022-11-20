<?php include 'connex.php'; ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link href="style.css" rel="stylesheet" />
<?php
global $conn;
$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE `bookId`='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
// var_dump($row); 
?>
<div class="h-100 d-flex align-items-center justify-content-center">
    <div class=" ">
        <div class="col-10 text-center">
            <h1>Update Book</h1>
        </div>
        <form enctype="multipart/form-data" action="update.php?id=<?= $id ?>" method="POST">

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" name="updatetitle" id="title-addBook" value='<?php echo $row['bookTitle'] ?>'>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Author:</label>
                <input type="text" class="form-control" name="updateAuthor" value='<?php echo $row['author'] ?>'>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">PublisherName:</label>
                <input type="text" class="form-control" name="updatePublisherName" value='<?php echo $row['publisherName'] ?>'>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Image:</label>
                <input type="file" class="form-control" name="image">
                <input type="hidden" value='<?php echo $row['image'] ?>' name="old_img">
            </div>

            <!-- select2 -->

            <div class="modal-footer">
                <button type="submit" class="btn " id="update" name="update">update</button>
            </div>
        </form>
    </div>
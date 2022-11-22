$("form").parsley();

function checkDelete(id){

console.log("hiiii");

    if(confirm("Are you sure do you want to delete!!")){

        window.location.href="http://localhost/library1/Library-Management-System/books.php?id="+id;
    }
}
<?php 

function redirect($location){

    header("location: $location");
}

function query($sql){
    global $connection;

    return mysqli_query($connection, $sql);

}

function confirm ($result){

    global $connection;
        if (!$result){
            die("QUERY FAILED" . mysqli_error($connection));
        }
    }

function escape_string ($string){

    global $connection;
    return mysqli_real_escape_string($connection, $string);

            }
    

function fetch_array($result){

        return mysqli_fetch_array($result);

    }

//Thumbnail display get products
    function get_productS() {
        $query = query("SELECT * FROM products");
        confirm($query);

        while ($row = fetch_array($query)) {
            
        




        }

        

    }
        

?>
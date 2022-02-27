<?php
include "connection.php";
include "print_table.php";
$method = $_SERVER['REQUEST_METHOD'];
if(isset($_GET['name']))
{
    $name = $_GET['name'];
}else{
    $name = null;
}
?>
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addPersonForm.php">Add Person</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addCountryForm.php">Add Country</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="addDistrictForm.php">Add District</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="search.php">Search</a>
            </li>
        </ul>
    </div>
</nav>
<body>
<div style="width:800px; margin:0 auto;">
    <form action="search.php" style="width: 500; margin-left: 25; margin-top: 50" method="get">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Name</label>
                <input class="form-control" name="name" placeholder="Burgenland">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
</div>
<div style="margin: 30">
<?php
if($name){
    echo "<h3>Person</h3>";
    print_table($connection, "select * from person where name like '$name'", array("id", "firstname", "lastname"));

    echo "<h3>Country</h3>";
    print_table($connection, "select * from country where name like '$name'", array("id", "name"));

    echo "<h3>District</h3>";
    print_table($connection, "select d.id as id, d.name as name, c.name as cname from district as d join country as c on d.country_Id = c.id where d.name like '$name'", array("id", "name", "cname"));
}else{
    echo "<h3>Person</h3>";
    print_table($connection, "select * from person", array("id", "firstname", "lastname"));

    echo "<h3>Country</h3>";
    print_table($connection, "select * from country", array("id", "name"));

    echo "<h3>District</h3>";
    print_table($connection, "select d.id as id, d.name as name, c.name as cname from district as d join country as c on d.country_Id = c.id", array("id", "name", "cname"));
}
?>
</div>
</body>

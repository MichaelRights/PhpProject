<?php 
    require_once "shared/layout.php";
    ?> 
    
    <title>Books</title>
</head>
<body>
    <?php
    require_once "shared/navbar.php"; 
    ?>
    <div id="storeContainer" class="jumbotron d-flex flex-wrap justify-content-around">
    <?php 
        require_once("database/Users.php");

        foreach(Users::getBooksOfUser($_COOKIE["id"]) as $book){

        echo '<div class="card mb-4" style="width: 13rem;">
                <img class="card-img-top" src="/images/'.$book->name.'.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title cut-text-long" title="'.$book->name.'">'.$book->name.'</h5>
                    <p class="card-text">'.$book->author.'</p>
                </div>
            </div>';
        }
    ?>
    </div>

<?php
require_once "shared/scripts.php";
?>
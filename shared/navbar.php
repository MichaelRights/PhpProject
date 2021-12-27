
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
    <a class="navbar-brand" href="/home.php">BookStore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarText">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="/store.php">Store <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/books.php">Books</a>
        </li>
        
        </ul>
        <div class="d-flex flex-row">
            <div class="nav-item dropdown d-inline">
                <a id="cart" class="nav-link dropdown-toggle navbar-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                        require_once("database/Users.php");
                        echo "Cart(".count(Users::getUserById(intval($_COOKIE["id"]))->cart).")";
                    ?>
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <div id="cartContainer"></div>
                    <button id="buy" class="btn btn-warning my-1 mx-auto d-block text-white">Buy All</button>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a class="nav-link dropdown-toggle navbar-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php
                        require_once("database/Users.php");
                        echo Users::getUserById(intval($_COOKIE["id"]))->getFullName();
                    ?>
                </a>
                
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    </nav>
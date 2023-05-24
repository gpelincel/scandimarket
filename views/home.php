<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bdcc87c8b0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?=url(CSS."index.css")?>">
    <link rel="stylesheet" href="<?=url(CSS."style.css")?>">
    <title>ScandiMarket</title>
</head>

<body>
    <header>
        <h2><i class="fa-solid fa-list-check"></i>Product List</h2>
        <div class="btn-group">
            <a href="<?= url("addproduct") ?>"><button>Add</button></a>
            <button class="delete-product-btn">Mass delete</button> 
        </div>
    </header>
    <hr>
    <main class="products-grid">
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
        <div class="card">
            <input class="delete-checkbox" type="checkbox" name="delete" id="checkbox">
            <div class="card-content">
                <h2>TR12234</h2>
                <p>product</p>
                <p class="price">40.00 $</p>
                <p>Dimensions: 24x45x15</p>
            </div>
        </div>
    </main>
    <hr>
    <footer>
        <small>Scandiweb Test Assignment</small>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/bdcc87c8b0.js" crossorigin="anonymous"></script>
    <script src="Js/script.js" defer></script>
    <link rel="stylesheet" href="CSS/addproduct.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>ScandiMarket</title>
</head>

<body>
    <header>
        <h2><i class="fa-solid fa-list-check"></i>Product Add</h2>
        <div class="btn-group">
            <button type="submit" form="product_form">Save</button>
            <a href="index.html"><button>Cancel</button></a>
        </div>
    </header>
    <hr>
    <form action="" method="post" id="product_form">
        <div class="form-input">
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku">
        </div>
        <div class="form-input">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="form-input">
            <label for="price">Price ($)</label>
            <input type="number" min="0" name="price" id="price">
        </div>
        <div class="form-input">
            <label for="productType">Type Swticher</label>
            <select name="productType" id="productType">
                <option selected>Select an option</option>
                <option id="DVD" value="dvd">DVD</option>
                <option id="Furniture" value="book">Book</option>
                <option id="Book" value="furniture">Furniture</option>
            </select>
        </div>
        <div class="product-info" id="dvd">
            <div class="form-input">
                <label for="size">Size (MB)</label>
                <input type="number" min="0" name="size" id="size">
            </div>
            <small><p>Please, provide size</p></small>
        </div>
        <div class="product-info" id="furniture">
            <div class="form-input">
                <label for="height">Height (CM)</label>
                <input type="number" min="0" name="height" id="height">
            </div>
            <div class="form-input">
                <label for="width">Width (CM)</label>
                <input type="number" min="0" name="width" id="width">
            </div>
            <div class="form-input">
                <label for="length">Length (CM)</label>
                <input type="number" min="0" name="length" id="length">
            </div>
            <small><p>Please, provide dimensions</p></small>
        </div>
        <div class="product-info" id="book">
            <div class="form-input">
                <label for="weight">Weight (KG)</label>
                <input type="number" min="0" name="weight" id="weight">
            </div>
            <small><p>Please, provide weight</p></small>
        </div>
    </form>
    <hr>
    <footer>
        <small>Scandiweb Test Assignment</small>
    </footer>
</body>

</html>
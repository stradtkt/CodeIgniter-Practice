<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products</title>
</head>
<body>

<h1>Products</h1>

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_products as $product) { ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="/products/new">New Product</a>

</body>
</html>
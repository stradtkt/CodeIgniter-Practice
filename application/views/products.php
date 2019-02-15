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
            <th>Created At</th>
            <th>Updated At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($all_products as $product) { ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['created_at'] ?></td>
                <td><?= $product['updated_at'] ?></td>
                <td>
                    <span><a href="">Show</a></span>
                    <span><a href="/products/edit/<?= $product['id'] ?>">Edit</a></span>
                    <span><a href="">Delete</a></span>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<a href="/products/new">New Product</a>

</body>
</html>
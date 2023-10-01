
<h2 style='margin-left:100px;'>Add Products:</h2>
<form action="/save" method="post" align="center">
        <label>Product Name:</label>
        <input type="hidden" name="id" value="<?= $product['id'] ?? '' ?>">
        <input type="text" name="name" placeholder="name" value="<?= $_POST['name'] ?? $product['name'] ?? '' ?>">
        <br>
        <label>Description:</label>
        <input type="text" name="description" placeholder="description" value="<?= $_POST['description'] ?? $product['description'] ?? '' ?>">
        <br>
        <label>Product Image:</label>
        <input type="file" name="image" placeholder="image" value="<?= $_POST['image'] ?? $product['image'] ?? '' ?>">
        <br>
        <label>Price:</label>
        <input type="text" name="price" placeholder="price" value="<?= $_POST['price'] ?? $product['price'] ?? '' ?>">
        <br>
        <label>Category:</label>
        <input type="text" name="category" placeholder="category" value="<?= $_POST['category'] ?? $product['category'] ?? '' ?>">
        <br>
        <label>Quantity:</label>
        <input type="text" name="qty" placeholder="quantity" value="<?= $_POST['qty'] ?? $product['qty'] ?? '' ?>">
        <br>
        <input type="submit">
    </form>

<br><br><br>
<fieldset>
<h2>List of Products:</h2>
    <table border='1'>
        <tr>
            <th>-Name-</th>
            <th>- Description -</th>
            <th>-Image-</th>
            <th>-- Price --</th>
            <th>- Category -</th>
            <th>-Quantity -</th>
            <th>-Actions-</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $product['name'] ?></td>
                <td><?= $product['description'] ?></td>
                <td><?= $product['image'] ?></td>
                <td><?= $product['price'] ?></td>
                <td><?= $product['category'] ?></td>
                <td><?= $product['qty'] ?></td>
                <td><a href="/edit/<?= $product['id'] ?>">Update</a>||<a href="/delete/<?= $product['id'] ?>" class="delete">Delete</a></td>
             </tr>
        <?php endforeach; ?>
        </fieldset>
    </table>

    <style>
            label{
            display:inline-block;
            width:200px;
            margin-right:-100px;
            text-align:left;
            margin-left:-100px;
            margin-bottom:10px;
            }
            fieldset{
            border:none;
            width: 500px;
            margin:0px auto;
            }
            table tr:hover {
            background-color: #ddd;
            }

            table tr td small {
            opacity: 0.2;
            }

            table tr:hover td small {
            opacity: 1;
            }
    </style>
    
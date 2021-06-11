<?php
/*
Nadia Nur Annisa
203040107
SHIFT Kamis 08:00 - 09:00
*/
?>
<?php 
$fashion = [
    [
        "picture" => "1.jpg",
        "name" => "WOMEN BLUS RAYON KERAH SKIPPER LENGAN 3/4",
        "description" => "Skipper collar for effortless style. This blouse makes a fashion statement all on its own.
        - Wrinkle-resistant even after washing for easy care.
        - Smooth rayon material.
        - Versatile skipper collar.
        - Shorter length and slimmer fit through the body and shoulders for a sleek cut.
        - Button-up cuffs stay closed when you bend your elbows.
        - Flattering neckline.
        price",
        "price" => "Rp.299.000",
        "category" => "Blus",
    ],
    [
        "picture" => "2.jpg",
        "name" => "WOMEN AIRism KATUN PIYAMA LENGAN PANJANG",
        "description" => "Comfortable pajamas made of cotton. New pajamas made of AIRism cotton.
        - Added comfort features such as DRY technology and Cool Touch.
        - Feels very smooth and comfortable against your skin.
        - In addition to the AIRism features, it uses stretchy and comfortable cut and sewn fabric, so it is not see through and keeps the body lines covered.
        - Simple design that anyone can wear.
        - Sleek design in the front, so these pajamas look sharp.
        - The open collar design is easy to wear and does not feel tight when sleeping.",
        "price" => "Rp.499.000",
        "category" => "Loungewear",
    ],
    [
        "picture" => "3.jpg",
        "name" => "JAKET SWEAT HOODIE RETSLETING",
        "description" => "This item has a modern silhouette, while also looking to achieve the casual feel of sweats.
        - The item has a relaxed cut inspired by vintage sweats. Wear it in your true size, or go one size up for an oversized look.
        - Paid particular attention to the details, and used a thick yarn so it’s more durable.
        - Easy to style in many ways.",
        "price" => "Rp.399.000",
        "category" => "Jacket",
    ],
    [
        "picture" => "4.jpg",
        "name" => "SANDAL RUMAH OPEN TOE WAFFLE",
        "description" => "Open toe design. Our slippers are now washable.
        - In a classic waffle fabric.
        - Available in colors that showcase the waffle texture.
        - Updated washable design is now easier to keep clean.",
        "price" => "Rp.149.000",
        "category" => "Slippers",
    ],
    [
        "picture" => "5.jpg",
        "name" => "CLASSIC MINI BACKPACK",
        "description" => "CLASSIC MINI BACKPACK
        Casual weekends or full-blown festivals. Wherever you wander, this adidas mini backpack keeps your essentials close and easy to access. The zip pockets are perfect for small items like keys, an ID and cards. 
        Throw an extra layer, a water bottle and a snack inside and head out on your next adventure.",
        "price" => "Rp.630.000",
        "category" => "Backpack",
    ],
    [
        "picture" => "6.png",
        "name" => "CHUCK TAYLOR ALL STAR",
        "description" => "BOLD KICKS FOR BOLD LADIES. These Chuck Taylor All Star sneakers are specifically made for those who love to glitter and shine. Inspired by bold women who were born to stand out, these kicks feature a shiny tile upper for a luxe look and a classic rubber outsole for grip. 
        The high top construction and OrthoLite insole for cushioning add even more comfort, so that when you?re working hard to take over the world, you?ll feel great along the way.",
        "price" => "Rp.699.000",
        "category" => "Shoes",
    ],
    [
        "picture" => "7.jpg",
        "name" => "COTTON HOODED TOP",
        "description" => "Oversized top in cotton sweatshirt fabric with a jersey-lined, drawstring hood, low dropped shoulders, long sleeves and ribbing at the cuffs and hem. Soft brushed inside.",
        "price" => "Rp.399.900",
        "category" => "Hoddie",
    ],
    [
        "picture" => "8.jpg",
        "name" => "ZIPPED TOP",
        "description" => "Short top in sweatshirt fabric with a small stand-up collar, zip at the top, dropped shoulders and long sleeves. Zipped sleeve pocket, a kangaroo pocket and ribbing at the cuffs and hem. Soft brushed inside.",
        "price" => "Rp.349.900",
        "category" => "Hoodie",
    ],
    [
        "picture" => "9.jpg",
        "name" => "CULOTTE HIGH ANKLE JEANS",
        "description" => "CONSCIOUS Calf-length jeans in washed stretch cotton denim with a high waist, small front pockets, back pockets and straight, wide legs with raw-edge, frayed hems.",
        "price" => "Rp.499.900",
        "category" => "Jeans",
    ],
    [
        "picture" => "10.jpg",
        "name" => "SHIRT JAKCET",
        "description" => "Shirt jacket in woven fabric containing some linen and cotton. Stand-up collar with a tab and button, buttons down the front, flap chest pockets with a button, and long sleeves with buttoned cuffs. Unlined.",
        "price" => "Rp.799.900",
        "category" => "Jacket",
]
]
?>
<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Faxie</title>
    </head>
    <body>
        <div class="container mt-5 mb-5 text-center">
        <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">No</th>
            <th scope="col">Picture</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
    <tbody>
        <?php foreach($fashion as $n => $b) : ?>
        <tr>
            <td><?= $n+1; ?></td>
            <td>
                <img src="img/<?= $b["picture"]; ?>">
            </td>
            <td><?= $b["name"]; ?></td>
            <td><?= $b["description"]; ?></td>
            <td><?= $b["price"]; ?></td>
            <td><?= $b["category"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </div>
    </body>
</table>
</html>
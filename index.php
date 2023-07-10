<?php
    // Includo i file delle classi necessarie
    require_once __DIR__."/Ecommerce/Products.php";
    require_once __DIR__."/Ecommerce/Food.php";
    require_once __DIR__."/Ecommerce/Objects.php";
    require_once __DIR__."/Ecommerce/Game.php";

    // Creo istanze dei prodotti
    $prodFood = new Food ('https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 'Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');

    $prodTwoFood = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg0', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: € 44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');

    $prodThreeFood = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: € 34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutto');
    
    $prodFourFood = new Food ('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: € 2,95', 'Peso netto: 30g', 'Ingredienti: Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');
    
    $prodObjects = new Objects ('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: € 184,99', 'Mteriale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm');

    $prodTwoObjects = new Objects ('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: € 2,29', 'Materiale: Mteriale espanso', 'Dimensioni: ND');

    $prodGame = new Game ('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Prezzo: € 19,49', 'Caratteristiche: Gallegia e Rimbalza', 'Dimensioni: 8,5 cm x 10 cm');

    $prodTwoGame = new Game ('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Prezzo: € 4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5 cm x 10 cm');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <!-- link fortawsome -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <title>Boolshop</title>
</head>
    <body class="bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center bg-info text-white rounded-1 mt-3 mb-3">
                    <h1 class="fw-bold" style="font-size: 80px">BOOLSHOP</h1>
                    <h3 class="fw-bold">I Nostri Prodotti</h3>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodFood->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodFood->name ?></h3>
                    <h5><i class="fa-solid fa-dog"></i><?php echo $prodFood->type ?></h5>
                    <h5><?php echo $prodFood->price ?></h5>
                    <h5><?php echo $prodFood->weight ?></h5>
                    <h5><?php echo $prodFood->ingredients ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodTwoFood->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodTwoFood->name ?></h3>
                    <h5><i class="fa-solid fa-dog"></i><?php echo $prodTwoFood->type ?></h5>
                    <h5><?php echo $prodTwoFood->price ?></h5>
                    <h5><?php echo $prodTwoFood->weight ?></h5>
                    <h5><?php echo $prodTwoFood->ingredients ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodThreeFood->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodThreeFood->name ?></h3>
                    <h5><i class="fa-solid fa-cat"></i><?php echo $prodThreeFood->type ?></h5>
                    <h5><?php echo $prodThreeFood->price ?></h5>
                    <h5><?php echo $prodThreeFood->weight ?></h5>
                    <h5><?php echo $prodThreeFood->ingredients ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodFourFood->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodFourFood->name ?></h3>
                    <h5><i class="fa-solid fa-fish-fins"></i><?php echo $prodFourFood->type ?></h5>
                    <h5><?php echo $prodFourFood->price ?></h5>
                    <h5><?php echo $prodFourFood->weight ?></h5>
                    <h5><?php echo $prodFourFood->ingredients ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodObjects->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodObjects->name ?></h3>
                    <h5><i class="fa-solid fa-dove"></i><?php echo $prodObjects->type ?></h5>
                    <h5><?php echo $prodObjects->price ?></h5>
                    <h5><?php echo $prodObjects->materials ?></h5>
                    <h5><?php echo $prodObjects->dimension ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodTwoObjects->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodTwoObjects->name ?></h3>
                    <h5><i class="fa-solid fa-fish-fins"></i><?php echo $prodTwoObjects->type ?></h5>
                    <h5><?php echo $prodTwoObjects->price ?></h5>
                    <h5><?php echo $prodTwoObjects->materials ?></h5>
                    <h5><?php echo $prodTwoObjects->dimension ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodGame->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodGame->name ?></h3>
                    <h5><i class="fa-solid fa-dog"></i><?php echo $prodGame->type ?></h5>
                    <h5><?php echo $prodGame->price ?></h5>
                    <h5><?php echo $prodGame->featurs ?></h5>
                    <h5><?php echo $prodGame->dimension ?></h5>
                </div>
                <div class="card col-4">
                    <img src="<?php echo $prodTwoGame->image ?>" >
                    <h3 class="fw-bold"><?php echo $prodTwoGame->name ?></h3>
                    <h5><i class="fa-solid fa-cat"></i><?php echo $prodTwoGame->type ?></h5>
                    <h5><?php echo $prodTwoGame->price ?></h5>
                    <h5><?php echo $prodTwoGame->featurs ?></h5>
                    <h5><?php echo $prodTwoGame->dimension ?></h5>
                </div>
            </div>
        </div>
    </body>
</html>
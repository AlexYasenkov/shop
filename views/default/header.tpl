<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{$pageTitle}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{$templateWebPath}css/style.css">
</head>
<body>
<header class="header py-3">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="text-center">{$myShop}</h2>
                <div class="text-right">
                    <a href="/cart" class="text-decoration-none text-success">
                        <span class="h5">&#10066;</span>
                        <span class="cart-count-items">
                            {if isset($cartCountItems) && $cartCountItems > 0}
                                {$cartCountItems}
                            {/if}
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
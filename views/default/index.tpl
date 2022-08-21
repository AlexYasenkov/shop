{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                {foreach $lastProducts as $product}
                    <div class="col-md-6 col-lg-4 mt-3">
                        <div class="card">
                            <img src="{$templateWebPath}images/products/{$product['image']}"
                                 class="card-img-top" alt="picture">
                            <div class="card-body">
                                <h5 class="card-title">{$product['name']|truncate:10}</h5>
                                <p class="card-text">{$product['description']|truncate:50}</p>
                                <a href="/product/{$product['id']}" class="btn btn-primary">Смотреть</a>
                            </div>
                        </div>
                    </div>
                {/foreach}
            </div>
            <div class="row">
                <div class="col">
                    <ul class="pagination justify-content-center">
                        <li class="page-item {if $paginator['currentPage'] <= 1}{'disabled'}{/if}">
                            <a class="page-link"
                               href="{if $paginator['currentPage'] <= 1}{'#'}
                                {else}{'/index/?page='}{$paginator['currentPage']-1}{/if}">&lt;</a>
                        </li>
                        <li class="page-item {if $paginator['currentPage'] >= $paginator['pageCount']}{'disabled'}{/if}">
                            <a class="page-link"
                               href="{if $paginator['currentPage'] >= $paginator['pageCount']}}{'#'}
                                {else}{'/index/?page='}{$paginator['currentPage']+1}{/if}">&gt;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}
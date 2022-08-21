<div class="col-md-2">
    <ul class="nav flex-md-column">
        <li class="nav-item">
            <a href="/" class="nav-link">На главную</a>
        </li>
        {foreach $allCategories as $category}
            {if isset($category['subcategory'])}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">{$category['name']}</a>
                    <div class="dropdown-menu">
                        {foreach $category['subcategory'] as $subcategory}
                            <a href="/category/{$subcategory['id']}"
                               class="dropdown-item">{$subcategory['name']}</a>
                        {/foreach}
                    </div>
                </li>
            {/if}
        {/foreach}
    </ul>
    {if empty($userRegisterData)}
        <div class="user-authorization-box">
            <form id="userAuthorizationForm" class="mt-5" action="#" method="POST">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button id="btnUserAuthorization" type="submit" class="btn btn-primary">Войти</button>
            </form>
            <div class="mt-3"><a href="/user/registration" class="font-italic text-info">Регистрация</a></div>
        </div>
    {else}
        <div class="mt-5">
            <p class="font-italic">Welcome!</p>
            <a href="/user">{$userRegisterData['name']}</a>
            <a href="/user/logout" id="btnUserLogout" class="btn btn-outline-dark btn-sm">Выход</a>
        </div>
    {/if}
</div>
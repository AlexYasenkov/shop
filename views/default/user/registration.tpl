{include file='header.tpl'}
<div class="container">
    <div class="row">
        {include file='menu.tpl'}
        <div class="col-md-10">
            <div class="row">
                <div class="col-8 mx-auto">
                    {if empty($userRegisterData)}
                        <div class="user-authorization-box">
                            <h5 class="text-center font-italic mt-2">Регистрация</h5>
                            <form id="userRegisterForm" class="mt-2" action="#" method="POST">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Пароль">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control"
                                           name="confirmPwd" placeholder="Повторите пароль">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userName" placeholder="Имя">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userPhone" placeholder="Телефон">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="userAddress" placeholder="Адрес">
                                </div>
                                <button type="submit" id="btnUserRegister"
                                        class="btn btn-primary">Зарегистрироваться</button>
                            </form>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>
</div>
{include file="footer.tpl"}
{include file='header.tpl'}
<div class="container">
    <div class="row">
        <div class="col">
            <h5 class="mt-2">Загрузка изображения</h5>
            <form action="admin/upload" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="file" class="form-control-file" name="fileName">
                </div>
                <input type="hidden" name="itemId" value="5">
                <button type="submit" class="btn btn-primary">Загрузить</button>
            </form>
        </div>
    </div>
</div>
{include file="footer.tpl"}
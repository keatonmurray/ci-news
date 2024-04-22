<div class="container text-center my-4">
    <h2><?= $title ?></h2>
    <hr>
    <form action="<?= route_to('news.store') ?>" method="POST">
        <?= csrf_field() ?>
        <button type="submit" class="btn btn-primary float-end">Save post</button> <br>
        <div class="row my-4">
            <div class="col-12 col-sm-6">
                <input name="fname" type="text" class="form-control" placeholder="First name" aria-label="First name">
            </div>
            <div class="col-12 col-sm-6">
                <input name="lname" type="text" class="form-control" placeholder="Last name" aria-label="Last name">
            </div>
            <div class="col-12 mt-3">
                <input name="title" type="text" class="form-control" placeholder="Title" aria-label="Title">
            </div>
            <div class="col-12 mt-3">
                <textarea name="body" class="form-control" placeholder="Text Body" col="4" rows="8" id="floatingTextarea"></textarea>
            </div>
        </div>
    </form>
</div>

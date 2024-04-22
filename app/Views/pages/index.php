<div class="container text-center my-4">
    <h2><?= $title ?></h2>
    <hr>
    <a href="/create" type="button" class="btn btn-primary float-end">Add more news</a> <br>
    <div class="row my-5">
        <?php if(count($news) > 0): ?>
            <?php foreach($news as $item) :?>
                    <div class="col-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"><?= $item['title'] ?></h5>
                                <p class="card-text"><?= $item['body'] ?></p>
                                <a href="<?= route_to('news.show', $item['id']) ?>" class="btn btn-primary">Read more</a>
                            </div>
                        </div> <br>
                    </div>
                <?php endforeach ?>
        <?php endif ?>
    </div>
</div>
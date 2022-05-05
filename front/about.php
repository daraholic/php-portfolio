<div class="col-12 mb-1 mx-5" id="about">
<div class="container">
    <div class="row">
        <div class="card-group">
            <div class="card">
                <img class="img-thumbnail" src="./img/<?=$Photo->find(['sh' => 1])['img'];?>" alt="<?=$Photo->find(['sh' => 1])['text'];?>" width="288" height="364">
            </div>
            <div class="card">
                <div class="card-body text-VeryPeri">
                    <h4><i class="fa fa-certificate fa-fw"></i>About</h4>
                    <h2><?=$Info->find(1)['text'];?></h2>
                    <p><i class="fa fa-briefcase"></i>&nbsp;<?=$Info->find(2)['text'];?></p>
                    <p><i class="fa fa-home"></i>&nbsp;<?=$Info->find(3)['text'];?></p>
                    <p><i class="fa fa-envelope"></i>&nbsp;<?=$Info->find(4)['text'];?></p>
                    <p><i class="fab fa-github"></i>&nbsp;<a target="_blank" href="<?=$Info->find(5)['text'];?>">
                    <?=$Info->find(5)['text'];?></p></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
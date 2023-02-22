<?php if ($posts) :
    // dd($posts);
    foreach ($posts as $post) : ?>
        <div class="post-border">
            <div class="post-head">
                <div class="post-title-box">
                    <div class="post-title"><?= $post['title'] ?> </div>
                    <?php $postId = $post['id']; ?>
                    <div class="text-sm">
                        Posted on
                        <?php $date = date("d-m-y", strtotime($post['date']));
                        echo $date;  ?>
                    </div>
                </div>
                <div class="tag-button-width">
                    <!-- <div class="w-1/3"> </div> -->
                    <button type="button" class="post-tag-button">
                        <?php
                        $tag = getTag($post['tag']);

                        echo $tag; ?>
                    </button>
                </div>
              
            </div>
        



            <?php if($post['image'] !==""):  ?>
                <img class='post-edit-image img' src="../uploads/<?=$post['image']?>">
                <?php endif ?>
                <div class="form-edit-description">
                    <div>
                        <?= $post['description'] ?>
                    </div>
                </div>
                
        </div>


<?php
    endforeach;

else :
    echo "No posts yet, You can add a new one";
//Should print No-Posts.php Here .
// return "No-Posts.php";

endif; ?>
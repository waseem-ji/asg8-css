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
                <div class="tag-button-width"> <!-- Button menu !-->
                    <button id="dropdownMenuIconHorizontalButton" data-dropdown-toggle="dropdownDotsHorizontal_<?= $postId ?>" class="post-options-dropdown" type="button">
                        <svg class="post-options-dropdown-button-size" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>

                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownDotsHorizontal_<?= $postId ?>" class="post-options-bar ">

                        <ul class="post-options-bar-ul " aria-labelledby="dropdownMenuIconHorizontalButton">
                            <li>
                                <!-- <button class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"><a href="/update-post">UPDATE </a></button> -->
                                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal_<?= $postId ?>" class="post-option-update " type="button">
                                    Update
                                </button>
                                <button class="post-option-delete "><a href="/delete?id=<?= $postId ?> ">DELETE</a></button>
                            </li>
                        </ul>
                       

                    </div>
                </div>
            </div>
            <!-- Form Edit modal -->
            <div id="authentication-modal_<?= $postId ?>" tabindex="-1" aria-hidden="true" class="post-edit-modal-wrapper" onclick="loadEditModal(<?= $postId ?>)">
                <div>
                    <!-- Modal content -->
                    <div class="post-edit-modal-box">
                        <button type="button" class="post-edit-modal-close-button" data-modal-hide="authentication-modal">
                            <svg aria-hidden="true" class="close-button-size" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="post-edit-box">
                            <h3>Edit Your post</h3>
                            <form class="space-y-6" action="/forms?id=<?= $post['id'] ?>" method="post" enctype="multipart/form-data">
                                <div>
                                    <label for="title" class="post-edit-box-label">Title</label>
                                    <input type="text" name="title" id="title" value="<?= $post['title'] ?>" class="form-edit-box-input " placeholder="Write title for your post here" required>
                                </div>

                                <div>
                                    <textarea name="description" class="form-edit-box-textarea" rows="5" placeholder="Speak your mind"><?= $post['description'] ?></textarea>
                                </div>
                                <div class="form-edit-box-footer-wrapper">
                                    <div class="form-edit-box-footer">
                                        <div >
                                            <input type="file" name="image" id="image" class="form-edit-box-footer-input">
                                        </div>
                                        <input type="text" id="tag" name="tag" value="<?php
                                                                                        $tag = getTag($post['tag']);

                                                                                        echo $tag; ?>" class="margin-horizontal  form-edit-box-footer-input" placeholder="tag" required>
                                    </div>

                                </div>
                                <input type="hidden" name='_method' value="UPDATE">
                                <div class="button-color">
                                    <button type="submit" class=" form-edit-box-submit  ">Post to mySocial</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>



            <?php if(isset($post['image'])):  ?>
                <img class='post-edit-image img' src="../uploads/<?=$post['image']?>">
                <?php endif ?>
                <div class="form-edit-description">
                    <div >
                        <?= $post['description'] ?>
                    </div>
                </div>
                
        </div>


<?php
    endforeach;

else :
    echo "<p>no posts to show</p>";
//Should print No-Posts.php Here .
// return "No-Posts.php";

endif; ?>
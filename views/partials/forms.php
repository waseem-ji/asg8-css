<!-- Enter thoughts options -->
<div class="form-box">
    <form action="/forms" method="post" enctype="multipart/form-data" class="post-entry-form">
        <div >
            <label for="title" class="form-box-label">Title</label>
            <input type="text" name="title" id="title" class="form-box-input"  placeholder="Write title for your post here" required>
        </div>
        <div>
            <textarea name="description" class="form-box-textarea" rows="5" placeholder="Speak your mind"></textarea>
        </div>

        <div class="form-box-footer">
            <div >
                <input type="file" name="image" class="form-box-input" >
            </div>
            <div >
                <input type="text" id="tag" name="tag" class=" form-box-input"  placeholder="tag" required>
            </div>
            <div >
                
                
                <div class="button-color">
                    <button type="submit" name="submit" class="submit-post ">Post to mySocial</button>
                </div>
            </div>
        </div>
    </form>
</div>
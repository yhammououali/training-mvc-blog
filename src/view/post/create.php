<div class="row">
    <div class="col-12">
        <form action="index.php?route=post&action=create" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="50"></textarea>
            </div>

            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-3">Send</button>
            </div>
        </form>
    </div>
</div>

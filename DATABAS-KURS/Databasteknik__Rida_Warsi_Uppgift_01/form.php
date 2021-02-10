
<form action="create.php" method="post">
    <div class="form-group col-sm-3 p-2">
        <label for="name">Namn</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group col-sm-4">
        <label for="email">E-post</label>
        <input type="email" class="form-control" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share
            your email with anyone else.</small>
    </div>
    <div class="form-group col-sm-5">
        <label for="message">Meddelande</label>
        <textarea class="form-control" rows="3" name="message"></textarea>
    </div>
    <div class="form-group form-check ml-3">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn ml-3 btn-primary">Skicka meddelandet</button>
</form>
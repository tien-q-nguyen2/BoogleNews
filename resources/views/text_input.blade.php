<div class="form-group">
    <label for="<?php echo $name ?>" class="col-md-4 col-form-label"><?php echo $label ?></label>
    <input
        class="form-control"
        type="text"
        name="<?php echo $name ?>"
        value="<?php echo old($name, $default) ?>"
        placeholder="<?php echo $placeholder ?>"
    />
    <?php if($err = $errors->first($name)): ?>
        <span class="text-danger"><?php echo $err ?></span>
    <?php endif; ?>
</div>
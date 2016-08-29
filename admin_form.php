<h3>Neptune FB Share Button Options</h3>

<form method="post">
    <p>
        <label>Layout</label><br>
        <select name="layout">
            <option value="box_count" <?php echo ($layout == 'box_count') ? 'selected' : ''; ?>>box_count</option>
            <option value="button_count" <?php echo ($layout == 'button_count') ? 'selected' : ''; ?>>button_count</option>
            <option value="button" <?php echo ($layout == 'button') ? 'selected' : ''; ?>>button</option>
        </select>
    </p>
    <p>
        <label>Size</label><br>
        <select name="size">
            <option value="small" <?php echo ($size == 'small') ? 'selected' : ''; ?>>small</option>
            <option value="large" <?php echo ($size == 'large') ? 'selected' : ''; ?>>large</option>
        </select>
    </p>
    <input type="submit" value="Save" />
</form>
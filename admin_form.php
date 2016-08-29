<div class="wrap">

    <h1>Neptune FB Share Button Options</h1>

    <?php if ($success) : ?>
        <div class="notice notice-success is-dismissible">
            <p><?php _e('Settings saved.', 'ncom-success'); ?></p>
        </div>
    <?php endif; ?>

    <form method="post">
        <table class="form-table">
            <tr>
                <th>
                    <label>Layout</label>
                </th>
                <td>
                    <select name="layout">
                        <option value="box_count" <?php echo ($layout == 'box_count') ? 'selected' : ''; ?>>box_count</option>
                        <option value="button_count" <?php echo ($layout == 'button_count') ? 'selected' : ''; ?>>button_count</option>
                        <option value="button" <?php echo ($layout == 'button') ? 'selected' : ''; ?>>button</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>
                    <label>Size</label>
                </th>
                <td>
                    <select name="size">
                        <option value="small" <?php echo ($size == 'small') ? 'selected' : ''; ?>>small</option>
                        <option value="large" <?php echo ($size == 'large') ? 'selected' : ''; ?>>large</option>
                    </select>
                </td>
            </tr>
        </table>

        <p class="submit">
            <input type="submit" value="Save Changes" class="button button-primary" />
        </p>

    </form>

</div>
<div class="cala__cover">
    <h2>Simple Modal</h2>
    <form method="post" action="options.php">
        <?php settings_fields('simplemodal_options_group'); ?>
        <div class="admin_form_group">
            <label class="label__num">
                <span>Текст в модальном окне</span><br>
                <input placeholder="" type="text" id="<?php echo SIMPLEMODAL_OPTION; ?>" name="<?php echo SIMPLEMODAL_OPTION; ?>" value="<?php echo get_option(SIMPLEMODAL_OPTION); ?>" />
            </label>
        </div>
        <?php submit_button(); ?>
    </form>
</div>

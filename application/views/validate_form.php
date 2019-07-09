<html>
    <head>
    <title>Form Validation Example</title>
    <style>
    .field_title{font-size: 13px;font-family:Arial;width: 300px;margin-top: 10px}
    .form_error{font-size: 13px;font-family:Arial;color:red;font-style:italic}
    </style>
    </head>
     
    <body>
        <div class="form_error">
          <?php echo validation_errors(); ?>
        </div>
         
        <?php echo form_open(); ?>
         
            <h2>Form Validation Example</h2>
         
            <div>
                <div class="field_title">Text Field One (Required)</div>
                <input type="text" name="text_field" value="<?php echo set_value('text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Text Field Two (Minimum length)</div>
                <input type="text" name="min_text_field" value="<?php echo set_value('min_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Text Field Three (Maximum length)</div>
                <input type="text" name="max_text_field" value="<?php echo set_value('max_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Text Field Four (Exact length)</div>
                <input type="text" name="exact_text_field" value="<?php echo set_value('exact_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Text Field Five (Alphabets only)</div>
                <input type="text" name="alphabets_text_field" value="<?php echo set_value('alphabets_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Text Field Six (Alphanumeric only)</div>
                <input type="text" name="alphanumeric_text_field" value="<?php echo set_value('alphanumeric_text_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Email Field</div>
                <input type="text" name="valid_email_field" value="<?php echo set_value('valid_email_field'); ?>" size="30" />
            </div>
             
            <div>
                <div class="field_title">Password Field</div>
                <input type="password" name="password_field" value="" size="30" />
            </div>
             
            <div>
                <div class="field_title">Password Confirmation Field</div>
                <input type="password" name="password_confirmation_field" value="" size="30" />
            </div>
             
            <div>
                <div class="field_title">IP Field</div>
                <input type="text" name="valid_ip_field" value="<?php echo set_value('valid_ip_field'); ?>" size="30" />
            </div>
             
            <div class="field_title">
                <input type="submit" value="Submit" />
            </div>
         
        </form>
    </body>
</html>
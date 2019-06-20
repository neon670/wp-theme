(function($){
    $("#recipe_rating").bind( 'rated', function(){
        $(this).rateit( 'readonly', true );

        var form        =   {
            action:         'r_rate_recipe',
            rid:            $(this).data( 'rid' ),
            rating:         $(this).rateit( 'value' )
        };

        $.post( recipe_obj.ajax_url, form, function(data){
            
        });
    });
    $("#recipe-form").on'submit',function(e){
        e.preventDefault();
        $this.hide();
        $("#recipe-status").html(
            '<div class="alert alert-info">Please wait, we are submitting your recipe.</div>');

        var form    = {
            action:     'r_submit_user_recipe',
            title:       $("#r_inputTitle").val(),
            content:     tinymce.activateEditor.getContent()
        }
        $.post(recipe.obj.ajax_url, form, function(data){
            if(data.status == 2){
            }else{

            }
        });
    }

   $(document).on('submit', '#register-form', function(e){
       e.preventDefault();
       $("register-status").html(
           '<div class="alert alert alert-info">Please wait</div>');
       $this.hide();
       var form            ={
           _wpnonce:         $("#_wpnonce").val(),
           action:              "recipe_create_account",
           name:                $("#register-form-name").val(),
           username:            $("#register-form-username").val(),
           email:               $("#register-form-email").val(),
           pass:                $("#register-form-password").val(),
           confrom_pass:        $("register-form-repassword").val()
       };
       $.post(recipe_obj.ajax_url, form).always(function(data){
           if(data.status == 2){
               $("#register-status").html(
                   '<div class="alert alert-success">Accont created</div>');
               location.href     = recipe_obj.home_url;
           }else{
               $("#register-status").html(
                   '<div class="alert alert-danger">Unable to create an account</div>');
               $("#register-form").show();
           }
       });
   });
})(jQuery);
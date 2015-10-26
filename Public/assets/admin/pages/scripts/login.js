var Login = function() {

    var login_form = $('.login-form');
    var forget_form = $('.forget-form');
    var register_form = $("#register-form");
    var verifyimg = $("#verify_img");

    $("#register-submit-btn").click(function () {
        var url = register_form.attr('action');
        var values = register_form.serialize();
        $.post(url,{_PARAMS_:values}, function (data) {
            console.log(data);
        });
        
    });


    //click to refresh verify image
    verifyimg.click(function(){
        var src = verifyimg.attr("src");
        if( src.indexOf('?')>0){
            $(this).attr("src", src+'&random='+Math.random());
        }else{
            $(this).attr("src", src.replace(/\?.*$/,'')+'?'+Math.random());
        }
    });


    var handleLogin = function() {

        login_form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: true, // do not focus the last invalid input
            rules: {
                username: {
                    required: true
                },
                password: {
                    required: true
                },
                verify :{
                  required :true
                },
                remember: {
                    required: false
                }
            },

            messages: {
                username: {
                    required: "Username is required."
                },
                password: {
                    required: "Password is required."
                },
                verify:{
                    required: "Verify Code is required.",
                    minlength: 4
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit
                //console.log(validator.invalid);
                var error = '';
                for(var x in validator.invalid){
                    //获取错误信息
                    error += validator.invalid[x]+"<br />";
                }
                showErrorMessage(error);
            },

            highlight: function(element) { // hightlight error inputs
                $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit(); // form validation success, call ajax form submit
            }
        });

        login_form.find("input").keypress(function(e) {
            if (e.which == 13) {
                if (login_form.validate().form()) {
                    login_form.submit(); //form validation success, call ajax form submit
                }
                return false;
            }
        });
    };

    var handleForgetPassword = function() {
        $('.forget-form').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },

            messages: {
                email: {
                    required: "Email is required."
                }
            },

            invalidHandler: function(event, validator) { //display error alert on form submit

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                error.insertAfter(element.closest('.input-icon'));
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        forget_form.find("input").keypress(function(e) {
            if (e.which == 13) {
                if (forget_form.validate().form()) {
                    forget_form.submit();
                }
                return false;
            }
        });

        jQuery('#forget-password').click(function() {
            login_form.hide();
            forget_form.show();
        });

        jQuery('#back-btn').click(function() {
            login_form.show();
            forget_form.hide();
        });
    };

    var handleRegister = function() {
        function format(state) {
            if (!state.id) return state.text; // optgroup
            return "<img class='flag' src='../../assets/global/img/flags/" + state.id.toLowerCase() + ".png'/>&nbsp;&nbsp;" + state.text;
        }
        var select2_sample4 = $("#select2_sample4");
        if (jQuery().select2) {
            select2_sample4.select2({
	            placeholder: '<i class="fa fa-map-marker"></i>&nbsp;Select a Country',
	            allowClear: true,
	            formatResult: format,
	            formatSelection: format,
	            escapeMarkup: function(m) {
	                return m;
	            }
	        });

            select2_sample4.change(function() {
	            register_form.validate().element($(this)); //revalidate the chosen dropdown value and show error or success message for the input
	        });
    	}

        register_form.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {

                username: {
                    required: true
                },
                nickname: {
                    required: true
                },
                password: {
                    required: true
                },
                rpassword: {
                    required: true,
                    equalTo: "#reg_password"
                },
                email: {
                    required: false
                }
            },

            messages: { // custom messages for radio buttons and checkboxes
            },

            invalidHandler: function(event, validator) { //display error alert on form submit

            },

            highlight: function(element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').addClass('has-error'); // set error class to the control group
            },

            success: function(label) {
                label.closest('.form-group').removeClass('has-error');
                label.remove();
            },

            errorPlacement: function(error, element) {
                if (element.attr("name") == "tnc") { // insert checkbox errors after the container
                    error.insertAfter($('#register_tnc_error'));
                } else if (element.closest('.input-icon').size() === 1) {
                    error.insertAfter(element.closest('.input-icon'));
                } else {
                    error.insertAfter(element);
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });

        $('.register-form input').keypress(function(e) {
            if (e.which == 13) {
                if (register_form.validate().form()) {
                    register_form.submit();
                }
                return false;
            }
        });

        jQuery('#register-btn').click(function() {
            login_form.hide();
            register_form.show();
        });

        jQuery('#register-back-btn').click(function() {
            login_form.show();
            register_form.hide();
        });
    };

    return {
        //main function to initiate the module
        init: function() {

            handleLogin();
            handleForgetPassword();
            handleRegister();

        }

    };

}();
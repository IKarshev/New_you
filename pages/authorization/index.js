$(function(){//переключение форм авторизации/регистрации
    $(".auth_form .tab a").on("click",function(event){
        event.preventDefault();

        if ( $(this).hasClass("enter") ){
            $(".auth_form .tab a.register").removeClass("active");
            $(".auth_form .tab a.enter").addClass("active");

            $(".form_bg form.enter").addClass("active");
            $(".form_bg form.register").removeClass("active");
        } else{
            $(".auth_form .tab a.register").addClass("active");
            $(".auth_form .tab a.enter").removeClass("active");

            $(".form_bg form.enter").removeClass("active");
            $(".form_bg form.register").addClass("active");
        }

    });
});

$(function(){
    var bool = Boolean;

    jQuery.validator.addMethod("matching_accounts_email", function( value, element, params ) {
        $.ajax({
            url: './ajax_matching_accounts_email.php',
            method: 'post',
            dataType: 'html',
            async: false,
            data: {
                "Email": value,
            },
            success: function(data){
                let arr = JSON.parse(data);
                console.log( arr );
                if ( arr.length > 0 ){
                    bool = false;
                } else{
                    bool = true;
                }
            }
        });
        return bool;
    });


    jQuery.validator.addMethod("matching_accounts_phone_number", function( value, element, params ) {
        value = value.replaceAll("+","");
        value = value.replaceAll(" ","");
        value = value.replaceAll("(","");
        value = value.replaceAll(")","");
        value = value.replaceAll("-","");
        value = value.replaceAll("","");
        value = value.replaceAll("_","");
        $.ajax({
            url: './ajax_matching_account.php',
            method: 'post',
            dataType: 'html',
            async: false,
            data: {
                "Phone_number": value,
            },
            success: function(data){
                let arr = JSON.parse(data);
                if ( arr.length > 0 ){
                    bool = false;
                } else{
                    bool = true;
                }
            }
        });
        return bool;
    });

    jQuery.validator.methods.matches = function( value, element, params ) {
        var re = new RegExp(params);
        return this.optional( element ) || re.test( value );
    }

    jQuery.validator.methods.matchesPhone = function( value, element, params ) {
        var re = new RegExp(params);
        value = value.replaceAll("+","");
        value = value.replaceAll(" ","");
        value = value.replaceAll("(","");
        value = value.replaceAll(")","");
        value = value.replaceAll("-","");
        return this.optional( element ) || re.test( value );
    }


    //курсор вначало поля
    $.fn.setCursorPosition = function(pos) {
        if ($(this).get(0).setSelectionRange) {
          $(this).get(0).setSelectionRange(pos, pos);
        } else if ($(this).get(0).createTextRange) {
          var range = $(this).get(0).createTextRange();
          range.collapse(true);
          range.moveEnd('character', pos);
          range.moveStart('character', pos);
          range.select();
        }
      };
    $(".auth_form form input[type='tel']").click(function(){
        $(this).setCursorPosition(3);
    });

    // валидация формы авторизации
    $(".auth_form form.enter").validate({
        rules: {
            tel_number:{required: true,},
            password:{required: true,},
        },
        messages: {
            tel_number:{required: "Обязательное поле Номер телефона* не заполнено",},
            password:{required:"Обязательное поле Пароль* не заполнено",},
        },
        submitHandler: function(form, event) {
            event.preventDefault();
            $.ajax({
                url: './auth.php',
                method: 'post',
                dataType: 'html',
                async: false,
                data: {
                    tel_number : $(".auth_form #enter_form input[name='tel_number']").val().replaceAll("+","").replaceAll(" ","").replaceAll("(","").replaceAll(")","").replaceAll("-","").replaceAll("","").replaceAll("_",""),
                    password: $(".auth_form #enter_form input[name='password']").val(),
                },
                success: function(data){
                    if (data == "success"){
                        window.location.href = "../../index.php";
                    } else {
                        window.location.href = "./index.php?tab=enter&reg=error";
                    };
                },
            });

        },
    });



    // валидация формы регистрации
    $("#register_form").validate({
        rules: {
            Name:{required: true,},
            Surname:{required: true,},
            errorClass:"error",
            tel_number: {
                required: true,
                matchesPhone: "^(7+([0-9]){10})$",
                matching_accounts_phone_number: true,
            },
            Email: {
                required: false,
                email: true,
                matching_accounts_email: true,
            },
            password: {
                required: true,
                minlength: 8,
                matches: "(?=^.{6,}$)(?=.*[0-9])(?=.*[A-Z])(?=.*[a-z])(?=.*[^A-Za-z0-9]).*",
            },
            Confirm_password:{
                required: true,
                minlength: 7,
                equalTo: "#password",
            },
            confirm_personal_data:{
                required: true,
            }
        },
        errorPlacement: function(error,element) {
            $(".auth_form form.register .error_message").addClass("active");
            $(".auth_form form.register .error_message span").html(error);
        },
        success: function() {
            $(".auth_form form.register .error_message").removeClass("active");
        },

        submitHandler: function(form, event) {
            event.preventDefault();
        
            $.ajax({
                url: './register.php',
                method: 'post',
                dataType: 'html',
                async: false,
                data: {
                    name : $(".auth_form #register_form input[name='Name']").val(),
                    surname: $(".auth_form #register_form input[name='Surname']").val(),
                    tel_number: $(".auth_form #register_form input[name='tel_number']").val().replaceAll("+","").replaceAll(" ","").replaceAll("(","").replaceAll(")","").replaceAll("-","").replaceAll("","").replaceAll("_",""),
                    email: $(".auth_form #register_form input[name='Email']").val(),
                    password: $(".auth_form #register_form input[name='password']").val(),
                },
                success: function(data){
                    if (data == "success"){
                        window.location.href = "./index.php?tab=enter&reg=success";
                    }
                },
            });

        },
        // Mrforki13052002-

        messages: {
            Name:{required: "Обязательное поле Имя* не заполнено",},
            Surname:{required:"Обязательное поле Фамилия* не заполнено",},
            tel_number:{
                required: "Обязательное поле Номер телефона* не заполнено",
                matchesPhone: "Не корректный номер телефона",
                matching_accounts_phone_number: "Этот номер уже используется другим аккаунтом",
            },
            Email:{
                email: "Поле E-mail введено не корректно",
                matching_accounts_email: "Этот E-mail уже используется другим аккаунтом",
            },
            password:{
                required: "Обязательное поле Пароль* не заполнено",
                minlength: "Пароль должен быть не менее 8 символов",
                matches: "Пароль должен содержать заглавные и строчные буквы, цифры, символовы",},
            Confirm_password:{
                required: "Обязательное поле Подтвердите пароль* не заполнено",
                equalTo: "Пароли не совпадают",
                minlength:"Пароли не совпадают",
            },
            confirm_personal_data:{required:"Необходимо согласие на обработку персональных данных",},
        },
    });


    $(".auth_form form input[type='tel']").mask("+7 (999) 999-99-99", {autoclear: false});
});
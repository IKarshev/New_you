// ===================================START_MAIN_SCRIPT===================================================

$(function(){//Формирование меню табов
    $(".main_field .tab").each(function(index){
        let id = $(this).attr("data-tab_id");
        let name = $(this).children(".tab_title").html();
        if ( index == 0 ){
            var is_active = "active";
        } else{
            var is_active = "";
        };
        $(".left_column .tab_menu").append(`<li><a data-tab_id="${id}" class="${is_active}" href="">${name}</a></li>`);
    }); 

});

$(function(){// Смена меню табов
    $(".tab_menu li a").on("click",function(event){
        event.preventDefault();

        $(".tab_menu li a").each(function(){
            $(this).removeClass("active");
        });
        $(this).addClass("active");

        let tab_id = $(this).attr("data-tab_id");

        $("body .main_field .tab").each(function(element){
            if ( $(this).attr("data-tab_id") != tab_id ){
                $(this).removeClass("active");
            } else{
                $(this).addClass("active");
            }
        });

    });
});


$(function(){// Меню бургер
    $(".toggle_burger_menu, .black_bg").on("click",function(event){
        event.preventDefault();
        $(".left_column, .black_bg").toggleClass("active");
    });
});


function close_popup(){
    $(".popups").fadeOut();
}


$(function(){//закрытие pop-up
    $(".close_popup").on("click",function(event){
        event.preventDefault();
        close_popup();
    });
});

function open_popup(popup_id){//логика открытия pop-up
    $(".popups").fadeIn();
    $(".popups .popup").each(function(){
        $(this).removeClass("success");
        if ( $(this).attr("data-popup_id") == popup_id ){
            $(this).fadeIn();
        } else{
            $(this).fadeOut();
        };
    });


};


// ===================================END_MAIN_SCRIPT===================================================

// ===================================START_TAB_NEWS=================================================


$(function(){

    $(".table .ikons a.add_news").on("click",function(event){//add_news
        event.preventDefault();
        open_popup($(this).attr("class"));
    });

    $(".table .ikons a.delete_news").on("click",function(event){//delete_news
        event.preventDefault();
        $(".popup[data-popup_id=delete_news] .confirm").attr("data-deleted_news", $(this).attr("data-news_id"));
        open_popup($(this).attr("class"));

    });

});

var dt = new DataTransfer();
$('.input-file input[type=file]').on('change', function(){// file add
	let $files_list = $(this).closest('.input-file').next();
	$files_list.empty();
 
	for(var i = 0; i < this.files.length; i++){
		let new_file_input = '<div class="input-file-list-item">' +
			'<span class="input-file-list-name">' + this.files.item(i).name + '</span>' +
			'<a href="#" onclick="removeFilesItem(this); return false;" class="input-file-list-remove">x</a>' +
            '<a href="" class="make_main" onclick="make_main(this); return false;">Сделать главной</a>' +
			'</div>';
		$files_list.append(new_file_input);
		dt.items.add(this.files.item(i));
	};
	this.files = dt.files;
});
function removeFilesItem(target){// file remove
	let name = $(target).prev().text();
	let input = $(target).closest('.input-file-row').find('input[type=file]');	
	$(target).closest('.input-file-list-item').remove();	
	for(let i = 0; i < dt.items.length; i++){
		if(name === dt.items[i].getAsFile().name){
			dt.items.remove(i);
		}
	}
	input[0].files = dt.files;  
}


function make_main(target){

    $(".input-file-list-item").each(function(){
        $(this).removeClass("active");
        $(this).children(".make_main").html("Сделать главной");

    });

    if ( !$(target).parent(".input-file-list-item").hasClass("active") ){
        $(target).parent(".input-file-list-item").addClass("active");
        $(target).html("Главная");
    };
}


$(function(){//add news submit
    $(".popup[data-popup_id=add_news] button[type=submit]").on("click",function(event){
        event.preventDefault();

        var form_data = new FormData( document.getElementById("add_news") );
        let main_img = $(".input-file-list-item.active .input-file-list-name").html();
        if ( typeof(main_img) != "undefined" ){
            form_data.append("main_image_name", main_img );
        };

        jQuery.ajax({
            url: '../../ajax/create_news.php',
            data: form_data,
            cache: false,
            contentType: false,
            processData: false,
            method: 'POST',
            type: 'POST', // For jQuery < 1.9
            success: function(data){
                $(".popup[data-popup_id=add_news]").addClass("success");
                setTimeout(() => {
                    close_popup();
                }, 1000);
            }
        });

    })
});


$(function(){//delete news
    $(".popup[data-popup_id=delete_news] .confirm").on("click",function(event){
        event.preventDefault();

        $.ajax({
            url: '../../ajax/delete_news.php',
            method: 'post',
            dataType: 'html',
            data: {
                news_id: $(this).attr("data-deleted_news"),
            },
            success: function(data){
                $(".popup[data-popup_id=add_news]").addClass("success");
                setTimeout(() => {
                    close_popup();
                }, 1000);
            }
        });

    })
});




// ===================================END_TAB_NEWS===================================================
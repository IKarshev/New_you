<?//=============================ДОБАВЛЕНИЯ НОВОСТИ===============================================?>

<div data-popup_id="add_news" class="popup">
    <form enctype="multipart/form-data" id="add_news">

        <h1>Добавление новости</h1>

        <div class="input_cont">
            <input class="input" type="text" name="title" placeholder="Заголовок">
            <label for="title" class="animated_placeholder">Заголовок</label>
        </div>
        <div class="input_cont textarea">
            <textarea class="input" name="main_text" id="" cols="30" rows="10" placeholder="Текст"></textarea>
            <label for="main_text" class="animated_placeholder">Текст</label>
        </div>
        

        <div class="input_cont input-file-row">
            <label class="input-file">
                <input name="photo_files[]" id="add_photo_file" type="file" multiple>		
                <span>Выберите файл</span>
            </label>
            <div class="input-file-list"></div>  
        </div>  

        <button type="submit">Создать новость</button>

    </form>
</div>

<?//=============================ИЗМЕНЕНИЯ НОВОСТИ===============================================?>
<div data-popup_id="edit_news" class="popup">
    test_2
</div>


<?//=============================ПОДТВЕРЖДЕНИЯ УДАЛЕНИЯ НОВОСТИ==================================?>
<div data-popup_id="delete_news" class="popup">
    <h1>Вы действительно хотите удалить новость?</h1>
    <div class="column">
        <a href="" class="confirm" data-deleted_news="">Да</a>
        <a href="" class="cancel close_popup">Отмена</a>
    </div>
</div>

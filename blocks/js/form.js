
$(document).ready(function () {

if ($('input[type=tel]')) {
    $('input[type=tel]').keyup(function(e) {
        if (e.keyCode === 17 || e.keyCode === 65 || e.keyCode === 97) { return false; }
        if ($(this).val() == "") {
            let inputMask = new Inputmask("+999999999999999",{ "placeholder": "" });
            inputMask.mask($(this));
        }
        if (($(this).val().substring(0, 2) == "+7") || ($(this).val().substring(0, 1) == "7") || ($(this).val().substring(0, 2) == "+8") || ($(this).val().substring(0, 1) == "8")) {
            let inputMask = new Inputmask('+9 (999) 999-99-99',{ "placeholder": "_" });
            inputMask.mask($(this));
        } else {
            let inputMask = new Inputmask("+999999999999999",{ "placeholder": "" });
            inputMask.mask($(this));
        }
        if (($(this).val().substring(0, 1) == "+") && ($(this).val().substring(0, 2) != "+7")) {
            let inputMask = new Inputmask("999999999999999",{ "placeholder": "" });
            inputMask.mask($(this));
        }
        if (($(this).val().substring(0, 1) == "8")) {
            let inputMask = new Inputmask("9 (999) 999-99-99",{ "placeholder": "_" });
            inputMask.mask($(this));
        }
    })
}


// Upload files

let fields = $('.file__input');

fields.each(function(i, item){
    let textLabel = $(item).next('label');
    let textDefault = $(textLabel).text();
    let parentInput = $(item).closest('.popup__file');

    $(item).on('change',function(){
        $(".fileName").empty();
        let countFiles = '';
        if ($(this).get(0).files && $(this).get(0).files.length >= 1) {
            countFiles = $(this).get(0).files.length;
        }
        if (countFiles) {
            $(textLabel).html('<span class"file-counter">Выбрано файлов:</span>' + '<span>'+ countFiles +'</span>');
        }else {
            $(textLabel).text(textDefault);
        }
    });

    $(parentInput).on('dragenter', function() {
        $(parentInput).addClass('_active');
    });

    $(parentInput).on('dragleave', function() {
        $(parentInput).removeClass('_active');
    });

    $(parentInput).on('drop', function(e) {
        e.preventDefault();
        e.stopPropagation();
        $(".fileName").empty();
        if(e.originalEvent.dataTransfer){
          if(e.originalEvent.dataTransfer.files.length) {
            var droppedFiles = e.originalEvent.dataTransfer.files;
            for(var i = 0; i < droppedFiles.length; i++) {
              $(".fileName").append("<br/> <b>Имя файла: </b>"+ droppedFiles[i].name);
              $(textLabel).html('<span class"file-counter">Выбрано файлов:</span>' + '<span>'+ droppedFiles.length +'</span>');
            }
          }
        }
        return false;
      });
      
      $(parentInput).on('dragover', function(e) {
          e.preventDefault();
      });
});

});


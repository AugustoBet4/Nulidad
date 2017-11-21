$(function () {
    //CKEditor


    //TinyMCE
    tinymce.init({
        menubar: false,
        statusbar: false,
        language: 'es',
        selector: "textarea#tinymce",
        theme: "modern",
        height: 300,
        plugins: [
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'searchreplace visualblocks visualchars fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons paste textcolor colorpicker textpattern imagetools print'
        ],
        toolbar1: 'undo redo bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar2: 'print preview | forecolor backcolor | save',
        image_advtab: true,
        content_style: "body {padding: 10px}"
    });
    tinymce.suffix = ".min";
    tinyMCE.baseURL = '../../plugins/tinymce';
});

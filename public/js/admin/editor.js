// import axios from 'axios'

// window.axios = axios

var textarea = document.querySelector('#editor')
var textareaModal = document.querySelector('#editorModal')
var editor_outcome = document.querySelector('#editor-outcome')

var csrf = $('meta[name="csrf-token"]').attr('content')

if(window.tinyMCE)
{
    tinyMCE.init({
        selector: '#editor',
        plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage',
        toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage",
        table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
        color_picker_callback: function (callback, value) {
            callback('#FF00FF');
        },
        paste_data_images: true,
        automatic_uploads: true,
        images_upload_handler: function (blobInfo,success,failure) {
            var data = new FormData()
            
            data.append('attachable_id', textarea.dataset.id)
            data.append('attachable_type', textarea.dataset.type)
            data.append('image',blobInfo.blob(),blobInfo.filename())
            
            axios.post(textarea.dataset.url,data)
                .then(function (res){
                    // console.log(res.data.url)
                    success(res.data.url)
                }).catch(function (err){
                    alert(err.response.statusText)
                    success('http://placehold.it/350x350')
                })
         
        
        }
    })

    tinyMCE.init({
        selector: '#editorModal',
        plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage',
        toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage",
        table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
        color_picker_callback: function (callback, value) {
            callback('#FF00FF');
        },
        paste_data_images: true,
        automatic_uploads: true,
        images_upload_handler: function (blobInfo, success, failure) {
            var data = new FormData()

            data.append('attachable_id', textareaModal.dataset.id)
            data.append('attachable_type', textareaModal.dataset.type)
            data.append('image', blobInfo.blob(), blobInfo.filename())

            axios.post(textareaModal.dataset.url, data)
                .then(function (res) {
                    success(res.data.url)
                }).catch(function (err) {
                    alert(err.response.statusText)
                    success('http://placehold.it/350x350')
                })
        }
    })

    if(editor_outcome !== null) {
        tinyMCE.init({
            selector: '#editor-outcome',
            plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage',
            toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage",
            table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
            color_picker_callback: function (callback, value) {
                callback('#FF00FF');
            },
            paste_data_images: true,
            automatic_uploads: true,
            images_upload_handler: function (blobInfo, success, failure) {
                var data = new FormData()
    
                data.append('attachable_id', editor_outcome.dataset.id)
                data.append('attachable_type', editor_outcome.dataset.type)
                data.append('image', blobInfo.blob(), blobInfo.filename())
    
                axios.post(editor_outcome.dataset.url, data)
                    .then(function (res) {
                        success(res.data.url)
                    }).catch(function (err) {
                        alert(err.response.statusText)
                        success('http://placehold.it/350x350')
                    })
            }
        })
    }

}

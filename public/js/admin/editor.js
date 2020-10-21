// import axios from 'axios'

// window.axios = axios

var textarea = document.querySelector('#editor')
var textareaModal = document.querySelector('#editorModal')
var editor_outcome = document.querySelector('#editor-outcome')
var editor_duration = document.querySelector('#editor-duration')
var editor_requirement = document.querySelector('#editor-requirement')
var editor_describe = document.querySelector('#editor-describe')

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
            plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage,directionality',
            toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage,ltr rtl,alignleft,aligncenter,alignright,alignjustify,bold,italic,",
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
                
                axios.post(editor_outcome.dataset.url, data, { 'X-CSRF-TOKEN': csrf })
                    .then(function (res) {
                        success(res.data.url)
                    }).catch(function (err) {
                        alert(err.response.statusText)
                        success('http://placehold.it/350x350')
                    })
            }
        })
    }
    if(editor_duration !== null){
        tinyMCE.init({
            selector: '#editor-duration',
            plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage,directionality',
            toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage,ltr rtl,alignleft,aligncenter,alignright,alignjustify,bold,italic,",
            table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
            color_picker_callback: function (callback, value) {
                callback('#FF00FF');
            },
            paste_data_images: true,
            automatic_uploads: true,
            images_upload_handler: function (blobInfo, success, failure) {
                var data = new FormData()

                data.append('attachable_id', editor_duration.dataset.id)
                data.append('attachable_type', editor_duration.dataset.type)
                data.append('image', blobInfo.blob(), blobInfo.filename())

                axios.post(editor_duration.dataset.url, data, { 'X-CSRF-TOKEN': csrf })
                    .then(function (res) {
                        success(res.data.url)
                    }).catch(function (err) {
                        alert(err.response.statusText)
                        success('http://placehold.it/350x350')
                    })
            }
        })
    }
    if(editor_requirement !== null){
        tinyMCE.init({
            selector: '#editor-requirement',
            plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage,directionality',
            toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage,ltr rtl,alignleft,aligncenter,alignright,alignjustify,bold,italic,",
            table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
            color_picker_callback: function (callback, value) {
                callback('#FF00FF');
            },
            paste_data_images: true,
            automatic_uploads: true,
            images_upload_handler: function (blobInfo, success, failure) {
                var data = new FormData()

                data.append('attachable_id', editor_requirement.dataset.id)
                data.append('attachable_type', editor_requirement.dataset.type)
                data.append('image', blobInfo.blob(), blobInfo.filename())

                axios.post(editor_requirement.dataset.url, data, { 'X-CSRF-TOKEN': csrf })
                    .then(function (res) {
                        success(res.data.url)
                    }).catch(function (err) {
                        alert(err.response.statusText)
                        success('http://placehold.it/350x350')
                    })
            }
        })
    }
    if (editor_describe) {
        tinyMCE.init({
            selector: '#editor-describe',
            plugins: 'image,paste,lists,advlist,textcolor colorpicker,link,autolink,emoticons,autoresize,table,directionality,fullpage,directionality',
            toolbar: "advlist,lists,forecolor backcolor,emoticons,table,directionality,fullpage,ltr rtl,alignleft,aligncenter,alignright,alignjustify,bold,italic,",
            table_toolbar: "tableprops tabledelete | tableinsertrowbefore tableinsertrowafter tabledeleterow | tableinsertcolbefore tableinsertcolafter tabledeletecol",
            color_picker_callback: function (callback, value) {
                callback('#FF00FF');
            },
            paste_data_images: true,
            automatic_uploads: true,
            images_upload_handler: function (blobInfo, success, failure) {
                var data = new FormData()

                data.append('attachable_id', editor_describe.dataset.id)
                data.append('attachable_type', editor_describe.dataset.type)
                data.append('image', blobInfo.blob(), blobInfo.filename())

                axios.post(editor_describe.dataset.url, data, { 'X-CSRF-TOKEN': csrf })
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

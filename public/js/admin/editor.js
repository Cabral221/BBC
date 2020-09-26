// import axios from 'axios'

// window.axios = axios

var textarea = document.querySelector('#editor')
var textareaModal = document.querySelector('#editorModal')

var csrf = $('meta[name="csrf-token"]').attr('content')

if(window.tinyMCE)
{
    tinyMCE.init({
        selector: '#editor',
        plugins: 'image,paste,lists,advlist',
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
            // var xhr;

            // xhr = new XMLHttpRequest();
            // xhr.withCredentials = false;
            // xhr.open('POST', textarea.dataset.url);

            // xhr.setRequestHeader('X-CSRF-TOKEN', csrf)
            // xhr.setRequestHeader('Accept','application/json')
            
            // var data = new FormData()
            // data.append('attachable_id', textarea.dataset.id)
            // data.append('attachable_type', textarea.dataset.type)
            // data.append('image', blobInfo.blob(), blobInfo.filename())

            // xhr.send(data);
            // xhr.onreadystatechange = function (){
            //     if(xhr.readyState == 4){
            //         var response = JSON.parse(xmlhttp.responseText);
            //             if (xmlhttp.status === 200 && response.status === 'OK') {
            //                 console.log('successful');
            //             } else {
            //                 console.log('failed');
            //             }
            //     }
            // }
        
        }
    })

    tinyMCE.init({
        selector: '#editorModal',
        plugins: 'image,paste,lists,advlist',
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
}

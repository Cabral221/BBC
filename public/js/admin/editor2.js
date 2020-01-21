// import axios from 'axios'

// window.axios = axios


if(window.tinyMCE)
{
    // const axios = require('axios')
    console.log('Tiny En marche');
    
    tinyMCE.init({
        selector: '#editor2',
        plugins: 'image,paste',
        paste_data_images: true,
        automatic_uploads: true,
    })
}

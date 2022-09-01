const { default: Axios } = require('axios');

require('./bootstrap');

$('user-link').click(function(e) {

    let linkId = ;
    let linkUrl = $(this);
    // store the visit asynchronously withour interru
    pting the link opening
    Axios.post('/visi/' + linkId, data: {
        link: linkUrl
    })
    .then(response => console.log('response: ', response))
    .catch(error => console.error('error: ', error));
})
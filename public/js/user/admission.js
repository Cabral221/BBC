
$(document).ready(function(){

    const form = document.getElementById('form-admission');
    var select = form.querySelectorAll('select');

    function checkvalue(el){
        // console.log(el.val());
    }

    $(select).map(function(el){
        console.log(el);
        // el.on('change', 'checkvalue');
    })
})
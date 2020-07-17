$(document).ready(function(){

    const form = document.getElementById('form-admission');
    const button = document.getElementById('submit-admission');


    
    var program = form.querySelector('#program');
    // var diplome = form.querySelector('#diplome');
    var niveau = form.querySelector('#niveau');
    var filiere = form.querySelector('#filiere');

    // $(diplome).parent().hide();
    $(niveau).parent().hide();
    $(filiere).parent().hide();


    var token = document.head.querySelector('meta[name="csrf-token"]');
    // window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;


    $(button).on('click', function(event){
        $(form).submit()
    })

    function callAxios(url = '',data = []){
        return axios.post(url,data).then(function (response) {
            return response.data
        }).catch((error) => {
            // Si on ne trouve rien lever une exception
            console.log(error)
            window.alert(error)
        })
    }

    // rempli le select diplome
    function checkvalue(event){
        if($(this).val() != ''){
            // Recuperer tout les niveau existant pour cet program
            var allNiveau = callAxios('/admission/niveau',{id: parseInt($(program).val())});
             
                allNiveau.then(function (data) {
                    let selectNiveau = '<option value="">Start in...</option>'
                    data.map(function (niv) {
                    selectNiveau += "<option value='" + niv.id + "'>" + niv.libele + "</option>"
                })
                // Remplir les option du select diplome
                // Afficher le select diplome
                $(niveau).html(selectNiveau);
                $(niveau).parent().show();
            })
        }else{
            // Reinitialiser les valeur des autres select
            $(this).prop('selectedIndex',0);

            // Cacher tout les autres selects
            // $(diplome).parent().hide();
            $(niveau).parent().hide();
            $(filiere).parent().hide();
        }


    }


    let inputs = form.querySelectorAll('input');
    
    let activeButton = 0

    function handleButton (c){
        if(c === 4){
            $(button).prop("disabled", false)
        }
    }

    $(inputs).map(function(key,el) {        
        if((el.type == 'text') || (el.type == 'number') || (el.type == 'number')){

            el.addEventListener('change' ,setActiveButton)
        }
    })

    function setActiveButton(event)
    {
        console.log(activeButton)
        if (this.value != '') {
            $(inputs).map(function(k,el) {
                if((el.type == 'text') || (el.type == 'number') || (el.type == 'number')){
                    activeButton++
                    handleButton(activeButton)
                }
            })
        }
    }

    // Rempli le filiere de ce program
    function checkvalueniveau (event) {
        if($(this).val() != ''){
            var allFiliere = callAxios('/admission/filiere',{id: parseInt($(program).val())});
             
            allFiliere.then(function (data) {
                let selectFiliere = '<option value="">select your sector...</option>'
                data.map(function (fil) {
                    selectFiliere += "<option value='" + fil.id + "'>" + fil.libele + "</option>"
                })
                // Remplir les option du select diplome
                // Afficher le select diplome
                $(filiere).html(selectFiliere);
                $(filiere).parent().show();
            })
            
        
        }else{
             // Reinitialiser les valeur des autres select
             $(this).prop('selectedIndex',0);

             // Cacher tout les autres selects
             $(filiere).parent().hide();
        }
    }

    $(program).on('change', checkvalue);
    // $(diplome).on('change', checkvaluedegre);
    $(niveau).on('change', checkvalueniveau);
})
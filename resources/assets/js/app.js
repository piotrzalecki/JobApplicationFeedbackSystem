
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

// window.Vue = require('vue');
//
// /**
//  * Next, we will create a fresh Vue application instance and attach it to
//  * the page. Then, you may begin adding components to this application
//  * or customize the JavaScript scaffolding to fit your unique needs.
//  */
//
// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
// const app = new Vue({
//     el: '#app'
// });
//


/////Questionnaire amount of questions input handler
$(document).ready(function(){


    function questions_input_handler(){

        var  selected = $('#qq_select').val();

        switch (selected){
            case '3':
                $('#cq_q4').hide();
                $('#question_4').val('');

                $('#cq_q5').hide();
                $('#question_5').val('');

                $('#cq_q6').hide();
                $('#question_6').val('');

                $('#cq_q7').hide();
                $('#question_7').val('');

                break;


            case '4':
                $('#cq_q4').show();

                $('#cq_q5').hide();
                $('#question_5').val('');

                $('#cq_q6').hide();
                $('#question_6').val('');

                $('#cq_q7').hide();
                $('#question_7').val('');


                break;

            case '5':
                $('#cq_q4').show();
                $('#cq_q5').show();

                $('#cq_q6').hide();
                $('#question_6').val('');

                $('#cq_q7').hide();
                $('#question_7').val('');

                break;


            case '6':
                $('#cq_q4').show();
                $('#cq_q5').show();
                $('#cq_q6').show();

                $('#cq_q7').hide().val('');
                $('#question_7').val('');
                break;


            case '7':
                $('#cq_q4').show();
                $('#cq_q5').show();
                $('#cq_q6').show();
                $('#cq_q7').show();
                break;
        }
    }



    $('#cq_q4').hide();
    $('#cq_q5').hide();
    $('#cq_q6').hide();
    $('#cq_q7').hide();

   $('#qq_select').change(function(){

       questions_input_handler();

   });



   questions_input_handler();



$('img').click(function(){

    var picture = $(this).attr('src');


    $('#myModal2').css('display','block');
    $('#img01').attr('src',picture);
    $('#caption').prepend($(this).attr('alt') + '<br><h6>Click photo to close</h6>');

    $('.close').click(function(){
        $('#myModal2').css('display','none');
        $('#caption').empty();
    });

    $('#img01').click(function() {
        $('#myModal2').css('display','none');
        $('#caption').empty();

    });

});


    $('#myModal3').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)

        modal.find('#id_receiver').val(recipient)
    })




///End of Document.Ready
});



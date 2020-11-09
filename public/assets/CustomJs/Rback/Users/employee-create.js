// ****************************************************************
// ******* file created and written by mateen masood **************
// ************* date : 27-sep-2020 ******************************
// ****************** js file-name:product-create.js ******************
// ****************** view file name : Products/Products-create.blade.php ****
// ****************** controller name : Products/ProductController *********


// ********* providde convenient CSRF protection for your AJAX based applications *****
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
// ****************************************************************
$(document).ready(()=>{


    // *****************date picker initilization *************

    // Datepicker
    $('.fc-datepicker').datepicker({
        showOtherMonths: true,
        selectOtherMonths: true
    });


    // ************** select2 initlization ****************

         $("#roleId").select2({

        // theme: "bootstrap",
        // dir: direction,
        allowClear: true,
        placeholder: "Select a role",
        "pagination": {
        "more": true
        },

        // minimumResultsForSearch: Infinity,
        // dropdownParent:$('#formContainer'),
        // containerCssClass: ":all:",
        ajax: {
            url: "/roles/select2-roles",
            type: "get",
            dataType: 'json',
            delay: 250,
            data: function (params) {
                return {
                     searchTerm: params.term,
                };
            },
            processResults: function (response) {
                return {
                    results: $.map(response, function (obj) {
                        return {
                            text: obj.name,
                            id: obj.id
                        }
                    }),
                }
            },
            cache: true
        },

        // formatResult: FormatResult,

    });

        // ***************** letters only and allow space in a name only *********

        jQuery.validator.addMethod("lettersonly", function(value, element) {
            return this.optional(element) || /^[a-z\s]+$/i.test(value);
        }, "Only alphabetical characters");


    // ********************* form validation ***********

      $("#formCreate").validate({

        // errorPlacement:function (error , element) {
        //   error.insertAfter(element.parents(".form-group"))
        // },
            rules: {
                firstName: {
                    required: true,
                    lettersonly: true
                },
                lastName: {
                    required: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true
                },
                phoneNo: {
                    required: true,
                    number: true
                },
                password: {
                    required: true,
                    
                },
                retypePassword: {
                    required: true,
                    equalTo: "#password"
                },
                roleId: {
                    required: true,
                    number: true
                },
                dateOfBirth: {
                    required: true,
                   
                },
                address: {
                    required: true,
                   
                },


            },
            messages: {
                firstName: {
                    required: "Please enter user first name",

                } ,
                lastName: {
                    required: "Please enter user last name",

                } ,
                email: {
                    required: "Please enter user email",
                    email: "Please enter valid email",

                } ,
                phoneNo: {
                    required: "Please enter user Phone number",
                    number : "Please enter number only"
                } ,
                password: {
                    required: "Please enter user password",

                } ,
                retypePassword: {
                    required: "Please enter confirm password",
                    equalTo: "your passwword is not matching",

                } ,
                roleId: {
                    required: "Please select user role",

                } ,
                dateOfBirth: {
                    required: "Please enter user date of birth",

                } ,
                address: {
                    required: "Please enter user address",

                } ,

            },

            submitHandler: function(form) {
               form_Create(form);
            }

      });

})

// ****************** create from ajax request ********************
// ***************** for adding product tinot database ************

function form_Create(formData) {
//    let createFormData = $('#formCreate').serialize();
var createFormData = new FormData (formData);
    // console.log(createFormData);
    $.ajax({
        url: '/employees',
        type: 'POST',
        data: createFormData,
        contentType: false,
        processData: false,

        success: (response)=>{
            if (response.status == 'true') {
                $.notify(response.message , 'success'  );
            }else{
                $.notify(response.message , 'error');

            }
        },
        error: (errorResponse)=>{
            $.notify( errorResponse, 'error'  );


        }
    })

}

// ....customer....
$(document).ready(function(){
            $("#customerform").validate({
                rules:{
                    fname : "required",
                    lname: "required",
                    address: "required",
                    email:{
                        required:true,
                        email:true
                    },
                    phone:{
                        required:true,
                        minlength:10,
                        maxlength:10
                    }

                },
                messages:{
                    fname:"THIS FIELD IS REQUIRED",
                    lname:"THIS FIELD IS REQUIRED",
                    address:"THIS FIELD IS REQUIRED",
                    email:{
                        required:"PLEASE ENTER THE EMAIL ADDRESS",
                        email:"PLEASE ENTER A VALID EMAIL ID"
                    },
                    phone:{
                        required:"ENTER YOUR PHONE NO",
                        minlength:"PLEASE ENTER A VALID PHONE NO",
                        maxlength:"PLEASE ENTER A VALID PHONE NO"

                    }
                },
                submitHandler: function(form){
                    form.submit();
                }
            });
        });

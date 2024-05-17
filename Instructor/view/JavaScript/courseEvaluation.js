$(document).ready(function(){
    $('#courseId, #name').on("blur", function(){
        var value = $(this).val();
        if(value.trim() === ''){
            $(this).next('.error').text('This field is required').show();
        } else {
            $(this).next('.error').hide();
        }
    });

    $('#addEvaluationForm').submit(function(event){
        var courseId = $('#courseId').val();
        var name = $('#name').val();
        var isValid = true;

        if(courseId.trim() === ''){
            $('#courseId').next('.error').text('This field is required').show();
            isValid = false;
        }
        if(name.trim() === ''){
            $('#name').next('.error').text('This field is required').show();
            isValid = false;
        }

        if(!isValid){
            event.preventDefault();
        }
    });
});
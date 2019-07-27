$( document ).ready(function() {

$('#btn-add').click(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
        }
    });

    $.ajax({
        type:'POST',
        url:'/products',
        data:{
            name:$("#frmAddTask input[name=name]").val(),
            price:$("#frmAddTask input[name=price]").val(),
            description: $("#frmAddTask input[name=description]").val(),
            image:$("#frmAddTask input[name=image]").val(),
        },
        dataType:'json',
        success:function(data){
          $('#frmAddTask').trigger('reset');
          $('#frmAddTask .close').click(function(){
              window.location.reload();
          })
        },
        error:function(data){
            var errors = JSON.parse(data.responseText);
            $('#add-task-errors').html('');
            $.each(errors.messages,function(key, value){
                $('#add-task-errors').append('<li>' + value + '</li>');
            });
            $("#add-error-bag").show();
        }
    });

});
$('#btn-delete').click(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$("meta[name='csrf-token']").attr('content')
        }
    });
    $.ajax({
        type:'DELETE',
        url:'/products/'+ $("#frmDeleteTask input[name=product_id]").val(),
        dataType:'json',
        success:function(data){
            $("#frmDeleteTask .close").click();
            window.location.reload();
        },
        error:function(data){
            console.log(data)
        }
    });
});




$('#btn-edit').click(function(){
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
        }
    });

    $.ajax({
        type:'PUT',
        url: '/products/' + $("#frmEditTask input[name=task_id]").val(),
        data:{
            name: $("#frmEditTask input[name=name]").val(),
            price: $("#frmEditTask input[name=price]").val(),
            description: $("#frmEditTask input[name=description]").val(),
        },
        dataType:'json',
        success:function(data){
            $('#frmEditTask').trigger("reset");
            $("#frmEditTask .close").click();
            window.location.reload();
        },
        error: function(data) {
            var errors = $.parseJSON(data.responseText);
            $('#edit-task-errors').html('');
            $.each(errors.messages, function(key, value) {
                $('#edit-task-errors').append('<li>' + value + '</li>');
            });
            $("#edit-error-bag").show();
        }
  
    });

});



});// ready document



  $("#add-error-bag").hide();

function deleteTaskForm(id){
    $.ajax({
        type: 'GET',
        url: '/products/' + id,
        success: function(data) {
        	
            $("#frmDeleteTask #delete-title").html("Delete Task (" + + ")?");
            $("#frmDeleteTask input[name=product_id]").val(id);
            $('#deleteTaskModal').modal('show');

        },
        error: function(data) {
            console.log(data);
        }
    });
}

function editProductForm(id){
	$.ajax({
		type:'GET',
		url:'products/' + $("#frmEditTask input[name=task_id]").val(),

		success:function(data){

            $("#frmEditTask input[name=name]").val(),
            $("#frmEditTask input[name=price]").val(),
            $("#frmEditTask input[name=description]").val(),
        
			$('#editTaskModal').modal('show');

		},
		error:function(data){
        console.log(data);
		}
	})
}
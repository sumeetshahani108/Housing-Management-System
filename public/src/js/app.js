var apt_id = 0;

$('.container2').find('.editpost').find('.edit').on('click', function(event){
    event.preventDefault();
    var price = event.target.parentNode.parentNode.childNodes[1].textContent;
    apt_id = event.target.parentNode.parentNode.dataset['apt_id'];
    $('#price-body').val(price);
    $('#edit-modal').modal();
});

$('#modal-save').on('click',function(){
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: { price: $('#price-body').val(), apt_id: apt_id, _token: token }
    })
        .done(function(msg){
            console.log(JSON.stringify(msg));
        });
});
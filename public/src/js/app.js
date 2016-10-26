var apt_id = 0;

$('.container2').find('.editpost').find('.edit').on('click', function(event){
    event.preventDefault();
    $('#edit-modal').modal();
    //var price = event.target.parentNode.parentNode.childNodes[1].textContent;
    //var locality = event.target.parentNode.parentNode.childNodes[1].textContent;
    //var bhk = event.target.parentNode.parentNode.childNodes[1].textContent;
    apt_id = event.target.parentNode.parentNode.dataset['apt_id'];
    $('#price-body').val(price);
    $('#locality-body').val(locality);
    $('#bhk-body').val(bhk);
    $('#city-body').val(city);
    $('#type-body').val(type);
});

$('#modal-save').on('click',function(){
    $.ajax({
        method: 'POST',
        url: urlLike,
        data: { price: $('#price-body').val(), locality : $('#locality-body').val() , bhk : $('#bhk-body').val() , city : $('#city-body').val(), type : $('#type-body').val() ,apt_id: apt_id, _token: token }
    })
        .done(function(msg){
            console.log(JSON.stringify(msg));
        });
});
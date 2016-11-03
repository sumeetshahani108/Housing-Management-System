$(document).ready(function(){


    $('.container2').find('.editpost').find('.edit').on('click', function(event){
        event.preventDefault();
        $('#edit-modal').modal();
        //var price = event.target.parentNode.parentNode.childNodes[1].textContent;
        //var locality = event.target.parentNode.parentNode.childNodes[1].textContent;
        //var bhk = event.target.parentNode.parentNode.childNodes[1].textContent;
        console.log(apartment_id);
        $('#price-body').val(price);
        $('#locality-body').val(locality);
        $('#bhk-body').val(bhk);
        $('#city-body').val(city);
        $('#type_of_apartment-body').val(type_of_apartment);
    });


    $('#modal-save').on('click',function(){
        $.ajax({
            method: 'POST',
            url: urlLike,
            data: { price: $('#price-body').val(), locality : $('#locality-body').val() , bhk : $('#bhk-body').val() , city : $('#city-body').val(), type : $('#type_of_apartment-body').val() ,apt_id: 3, _token: token }
        })
            .done(function(msg){
                console.log(JSON.stringify(msg));
            });
    });

    var likes = 0;
    $('.like').on('click',function(event){
        event.preventDefault();
        isLike = event.target.previousElementSibling == null;
        apt_id = event.target.parentNode.dataset['apt_id'];
        console.log(apt_id);
        console.log(isLike);
        $.ajax({
            method: 'POST',
            url: like,
            data: { isLike: isLike, apt_id: apt_id, _token: token }
        })
            .done(function(){
                console.log('working');
            });
    });

});
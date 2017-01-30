$(document).ready(function($) {
	$('.image-container').hover(function() {
		if($('.image-container img').attr('src').toLowerCase().indexOf('imageplaceholder') >= 0) {
			$('.image-container .overlay').hide();
		}
	}, function() {
		$('.image-container .overlay').show();
	});

    $("input").keypress(function(event) {
        $(this).closest('.control-group').removeClass('error');
        $(this).siblings('span').text('');
    });
});

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#previewImg').attr('src', e.target.result);
            $('#zoom-previewImg').attr('href', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    } else {
        var placeholderImg = 'http://' + window.location.hostname + ':' + location.port + '/img/imagePlaceholder.png';
        $('#previewImg').attr('src', placeholderImg);
        $('#zoom-previewImg').attr('href', placeholderImg);
    }
}

$("#foodTypeImage").change(function(){
    readURL(this);
    $(this).closest('.control-group').removeClass('error');
    $(this).parent().parent().siblings('span').text('');
});
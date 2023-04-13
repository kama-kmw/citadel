$(document).on('click', '#exit', function(e) {
    e.preventDefault();
    
    let popup = $(document).find('.exit-popup');
    popup.css('display', 'flex');
});
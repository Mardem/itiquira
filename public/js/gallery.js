$(document).ready(function() {
    $(".lightgallery").lightGallery();

    // Adults and children more - Chalet
    $('#more-adults').on('click',function() {
        $('#select-adults').attr('name', 'adults');
    });
    $('#more-children9').on('click',function() {
        $('#select-children9').attr('name', 'childrens_9');
    });
    $('#more-children10').on('click',function() {
        $('#select-childrens_10').attr('name', 'childrens_10');
    });

    // Adults and children more - Camping
    $('#more-children-camping').on('click',function() {
        $( "input[name*='childrens']" ).removeAttr('name');
        $('#select-children-camping').attr('name', 'childrens');
    });
    $('#more-adults-camping').on('click',function() {
        $( "input[name*='adults']" ).removeAttr('name');
        $('#select-adults-camping').attr('name', 'adults');
    });
});

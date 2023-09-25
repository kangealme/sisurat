$('#sub_menu').click(function(e){
    e.preventDefault();
    const subMenu = document.getElementById('sub_menu').getAttribute('href');
    console.log(subMenu);
});



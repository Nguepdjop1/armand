document.addEventListener('DOMContentLoaded', function(){
    alert('bienvenue au seins de la world computer!!');
    prompt("comment allez vs");

    const a = document.querySelectorAll('button[confirm]');

    a.forEach(button=>{
        button.addEventListener('click', function(event){
            const b = this.getAttribute('confirm');
            if(!confirm(b)){
                event.preventDefault();
            }
        });
    });

});


/*document.addEventListener('DOMContentLoaded', function()
{
    const a = document.querySelectorAll('button[confirm]');
    a=document.addEventListener('click', function(event){
        const b = this.getAttribute('confirm');
        if(!confirm(b)){
            event.preventDefault();
        }


});


});*/
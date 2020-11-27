var form = document.getElementById('formy');

form.addEventListener('submit', function(e){

    e.preventDefault();

    let datos = new FormData(form);


    fetch('php/form.php',{

        method:'POST',
        body:datos

    }) 
    
    .then(res => res.json())
    .then(data => {

        if (data == 'error') {

            document.getElementById('danger').style.display = 'block';
            
        } else {

            document.getElementById('success').style.display = 'block';
            document.getElementById('danger').style.display = 'none';
            form.style.display = 'none';

        }

    });




})
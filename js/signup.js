function fvalidate() {
        var r=1;
        if(document.getElementById('password1').value==document.getElementById('password2').value){r=1;}
        else {
                alert('PASSWORDS DO NOT MATCH');
                document.getElementById('password1').value='';
                document.getElementById('password2').value='';
                r=0;
        }
        if(document.getElementById('email').value.indexOf('@')<0) {
                alert('ENTER A VALID EMAIL ADDRESS');
                document.getElementById('email').value='';
                r=r*0;
        }
        else { r=r*1;}
        if(r){return true ;}
        else{ return false ;}
}


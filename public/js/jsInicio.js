document.body.style.background="rgba(206, 206, 206, 0.429)";

abierto=true;
var BotonBar=document.getElementById('btnBar');
var Menu=document.getElementById('MenuLateral')
Info=document.getElementsByClassName('Texto');

Opciones=document.getElementsByClassName('opciones');

Opciones=document.getElementsByClassName('opciones');

Lswitch=document.getElementsByClassName('lbl-switch');



btnSwitch=document.getElementById('btn-switch');

alinear=document.getElementsByClassName('alinear');

TablasPeliculas=document.getElementById('tablaPeliculas')

rellenar=document.getElementById('rellenar');

Contenido=document.getElementById('Contenido');

Dash=document.getElementById('btnDash');
Gestion=document.getElementById('btnGestion');
Ajustes=document.getElementById('btnAjustes');
Bugs=document.getElementById('btnBugs');
logo=document.getElementById('Logo');




/*Modo oscuro */
var EstadoModoOscuro=false;
Listbar=document.getElementById('ListaBar');
ListaBar.style.background="white";
ModalModificar=document.getElementById('ModalModificar');
ModalAñadir=document.getElementById('ModalAñadir');
luna=document.getElementById('luna');
Inputs=document.getElementsByClassName('form-control');
//

CuadroBienvenida=document.getElementById('Bienvenida');
CuadroGestion=document.getElementById('Gestion');
CuadroAjustes=document.getElementById('Ajustes');
CuadroBugs=document.getElementById('Bugs');



logo.addEventListener('click',AbrirMenu);
Gestion.addEventListener('click',CambiarGestion);
Dash.addEventListener('click',CambiarDash);
Ajustes.addEventListener('click',CambiarAjustes);
Bugs.addEventListener('click',CambiarBugs);

btnSwitch.addEventListener('click',ModoOscuro);

function ModoOscuro(){

    if(EstadoModoOscuro==false){

        document.body.style.background="#18191A";
        document.body.style.color="white";

        ListaBar.style.background="#242526";
        Menu.style.background="#242526";

        var longitud=Opciones.length;

        for(i=0;i<longitud;i++){
                
            Opciones[i].style.background="#242526";
            Opciones[i].style.color="white";
        }

        rellenar.style.background="#242526";

        CuadroBienvenida.style.background="#242526";

        TablasPeliculas.style.color="white";

        ModalModificar.style="background:#242526; color:white;";

        //ModalAñadir.style="background:#242526; color:white;";

        var longitud2=Inputs.length;

        for(i=0;i<longitud2;i++){
            Inputs[i].style.background="#242526";
        }
        


        EstadoModoOscuro=true;

        
    }
    else{

        document.body.style.background="rgba(206, 206, 206, 0.429)";
        document.body.style.color="black";

        ListaBar.style.background="white";//BOTON BAR
        Menu.style.background="white";//MENU

        var longitud=Opciones.length; //OPCIONES

        for(i=0;i<longitud;i++){
                
            Opciones[i].style.background="white";
            Opciones[i].style.color="black";
        }

        rellenar.style.background="white"; //EL RELLENO

        CuadroBienvenida.style.background="white";//EL CUADRO BIENVENIDA

        TablasPeliculas.style.color="black";

        ModalModificar.style="background:white; color:black;";
        //ModalAñadir.style="background:white; color:black;";

        var longitud2=Inputs.length;

        for(i=0;i<longitud2;i++){
            Inputs[i].style.background="white";
        }
        

        EstadoModoOscuro=false;
    }



}

function CambiarBugs(){

    CuadroBugs.style.display="block";
    CuadroBugs.style.opacity="1";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

    CuadroAdd.style.display="inline";
    CuadroAdd.style.opacity="0";

}


function VerAgregarPeli(){

    CuadroAdd.style.display="block";
    CuadroAdd.style.opacity="1";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

}


function CambiarAjustes(){

    CuadroAjustes.style.display="block";
    CuadroAjustes.style.opacity="1";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";

    CuadroAdd.style.display="inline";
    CuadroAdd.style.opacity="0";

}

function CambiarGestion(){

    CuadroGestion.style.display="block";
    CuadroGestion.style.opacity="1";

    CuadroBienvenida.style.display="inline";
    CuadroBienvenida.style.opacity="0";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";

    CuadroAdd.style.display="inline";
    CuadroAdd.style.opacity="0";
}

function CambiarDash(){

    CuadroBienvenida.style.display="block";
    CuadroBienvenida.style.opacity="1";

    CuadroGestion.style.display="inline";
    CuadroGestion.style.opacity="0";

    CuadroAjustes.style.display="inline";
    CuadroAjustes.style.opacity="0";

    CuadroBugs.style.display="inline";
    CuadroBugs.style.opacity="0";

    CuadroAdd.style.display="inline";
    CuadroAdd.style.opacity="0";
}



var n=0;

function miFuncion(){

    setTimeout(CerrarPreload, 2000);

}

function CerrarPreload(){

   
    cargado=document.getElementById('cargado');
    cargado.style.opacity="0";
    cargado.style.display="none";
    document.body.classList.remove('hidden');


    Contenido.style.visibility="visible";

}


function AbrirMenu(){

   
    if(n==0){

        
        Menu.style.width="4%";

        
        var longitud=Info.length;

        for(i=0;i<longitud;i++){
            
            Info[i].style.display="inline-block";
            Info[i].style.opacity="0";

        }




        var longitud2=alinear.length;

        for(i=0;i<longitud2;i++){    
            alinear[i].style.paddingLeft="25%";
            
        }

        var longitud3=Lswitch.length;

        for(i=0;i<longitud3;i++){
            
            Lswitch[i].style.marginTop="-55%";

        }


        CuadroBienvenida.style.left="7%";
        CuadroBienvenida.style.width="90%";

        CuadroGestion.style.left="7%";
        CuadroGestion.style.width="90%";

        CuadroAjustes.style.left="9%";
        CuadroAjustes.style.width="90%";
        
        CuadroBugs.style.left="9%";
        CuadroBugs.style.width="90%";

        luna.style.opacity=0;
        
        n=1;

        abierto=false;

        

        return abierto;
    }
    
    if(n==1){
        Menu.style.width="15%";
        
        var longitud=Info.length;

        for(i=0;i<longitud;i++){
            
            Info[i].style.display="inline-block";
            Info[i].style.opacity="1";

        }



        var longitud2=alinear.length;

        for(i=0;i<longitud2;i++){    
            alinear[i].style.paddingLeft="15%";
        }

        var longitud3=Lswitch.length;

        for(i=0;i<longitud3;i++){
            
            Lswitch[i].style.marginTop="4%";

        }


        CuadroBienvenida.style.left="17%";
        CuadroBienvenida.style.width="80%";


        CuadroGestion.style.left="17%";
        CuadroGestion.style.width="80%";

        CuadroAjustes.style.left="19%";
        CuadroAjustes.style.width="80%";

        CuadroBugs.style.left="19%";
        CuadroBugs.style.width="80%";

        luna.style.opacity=1;

        abierto=true;
        
        n=0;

        return abierto
        

    }
}


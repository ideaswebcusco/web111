// JavaScript Document
function abrirventana(archivo){
window.open(archivo,'','toolbar=no,scrollbars=yes,resizable=yes,width=800px,height=600px');
}
var cantidad = 0;
function agregar()
{
cantidad++;

var elemento=document.createElement('span');
var texto=document.createTextNode('nuevo '+cantidad+': ');
elemento.appendChild(texto);
var obj=document.getElementById('nuevo');
obj.appendChild(elemento);

  var nuevoAsig = document.createElement('input');
  nuevoAsig.type = 'text';
  nuevoAsig.name = 'txtnombre'+cantidad;
  nuevoAsig.id = 'txtnombre'+cantidad;
  document.getElementById('nuevo').appendChild(nuevoAsig);
obj.appendChild(document.createElement('br'));

var puntero2=  document.getElementById('cant');
puntero2.removeChild(puntero2.childNodes[puntero2.childNodes.length-1]);
  var nuevoGu = document.createElement('input');
  nuevoGu.type = 'hidden';
  nuevoGu.name = 'numero';
  nuevoGu.value = cantidad;
  nuevoGu.id = 'hidden' + cantidad;
  document.getElementById('cant').appendChild(nuevoGu);

/*  var nuevoRe = document.createElement('input');
  nuevoRe.type = 'reset';
  nuevoRe.value = 'Cancelar';
  nuevoRe.id = 'reset' + cantidad;
  document.getElementById('nuevo').appendChild(nuevoRe);*/

 //var puntero = document.getElementById('nuevo');
 //puntero.removeChild(puntero.childNodes[1]);
}

function eliminar(){
if (!cantidad==0){
cantidad--}
var puntero=document.getElementById('nuevo');
if (puntero.childNodes.length>2){
puntero.removeChild(puntero.childNodes[puntero.childNodes.length-1]);
puntero.removeChild(puntero.childNodes[puntero.childNodes.length-1]);
puntero.removeChild(puntero.childNodes[puntero.childNodes.length-1]);

var puntero2=  document.getElementById('cant');
puntero2.removeChild(puntero2.childNodes[puntero2.childNodes.length-1]);
  var nuevoGu = document.createElement('input');
  nuevoGu.type = 'hidden';
  nuevoGu.name = 'numero';
  nuevoGu.value = cantidad;
  nuevoGu.id = 'hidden' + cantidad;
  document.getElementById('cant').appendChild(nuevoGu);
}
}
function pintar(objeto)
{
if (objeto.checked){
	padre=objeto.parentNode;
	//padre=padre.parentNode;
	padre.style.color='#A57A00';
	padre.style.backgroundImage='url(fondos/select.jpg)';
	padre.style.fontWeight='normal';
	}else{
	padre=objeto.parentNode;
	//padre=padre.parentNode;
	padre.style.color='#000';
	padre.style.backgroundImage='none';
	padre.style.fontWeight='normal';
	}
}

function entrada(objeto)
{
  objeto.style.color='#000';
  objeto.style.backgroundImage='url(imagenes/tds.png)';
  objeto.style.fontWeight='normal';
}

function salida(objeto)
{
  objeto.style.color='#000';
  objeto.style.backgroundImage='none';
  objeto.style.fontWeight='normal';
}

function desaparece(){
var agregar=document.getElementById('nuevo');
agregar.style.display='none';
}

function aparece(){
var agregar=document.getElementById('nuevo');
var estilo=agregar.style.display;
if (estilo=='none'){
agregar.style.display='';
}
else{
agregar.style.display='none';
}
}


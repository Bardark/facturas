var btnMostrar=$('#btnMostrar'),
    tblMostrar=$('#tblMostrar');

function mostrarTbl() {
  tblMostrar.removeClass('hidden');
}

btnMostrar.on('click',mostrarTbl);

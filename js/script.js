
function validaCadastro(){
  const campoNome = document.getElementById('username');
  const campoEmail = document.getElementById('email');
  const campoSenha = document.getElementById('password');
  const campoConfSenha = document.getElementById('confpassword');


  if(campoNome.value =="" ){
      alert('O campo nome de usuario é obrigatorio');
      return false;
  }
  else if(campoEmail.value == ""){
    alert('O campo email é obrigatorio');
    return false;
  }
  else if(campoSenha.value == ""){
      alert('O campo senha é obrigatorio');
      return false;
  }
  else if(campoConfSenha.value == ""){
      alert('O campo confirmar senha é obrigatorio');
      return false;
  }
  else if (campoSenha.value != campoConfSenha.value){
    alert('As senhas não coincidem');
    return false;
  }
  return true;
}

function validaLogin(){
  const campoNome = document.getElementById('username');
  const campoSenha = document.getElementById('password');

  if(campoNome.value =="" ){
    alert('O campo nome de usuario é obrigatorio');
    return false;
  }
  else if(campoSenha.value == ""){
    alert('O campo senha é obrigatorio');
    return false;
  }
  return true;
}


function senhaForca(){
  var campoSenha = document.getElementById('password').value;
  var forca = 0;

  if((campoSenha.length >= 4) && (campoSenha.length <=8)){
    forca += 10;
  }else if(campoSenha.length > 7){
    forca += 25;
  }
  if((campoSenha.length >= 5) && (campoSenha.match(/[a-z]+/))){
    forca += 10;
  }
  if((campoSenha.length >= 6) && (campoSenha.match(/[A-Z]+/))){
    forca += 20;
  }
  mostrarForca(forca);
}

function mostrarForca(forca){
  if(forca < 30){
    document.getElementById('erroSenhaFraca').innerHTML = "<span style='color: #8B0000; font-size : 0.8rem'>Senha Fraca</span>";
    return false;
  }
  else if((forca >= 30) && (forca < 50 )){
    document.getElementById('erroSenhaFraca').innerHTML = "<span style='color: #FFD700; font-size : 0.8rem'>Senha Média</span>";
    return false;
  }  else if((forca >= 50) && (forca < 70 )){
    document.getElementById('erroSenhaFraca').innerHTML = "<span style='color: #32CD32; font-size : 0.8rem'>Senha Forte</span>";
    return true;
  }

}







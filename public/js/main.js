'use strict';

const clea = (endereco) =>{
    document.getElementById('rua').value = '';
    document.getElementById('bairro').value = '';
    document.getElementById('complemento').value = '';
    document.getElementById('cidade').value = '';
    document.getElementById('estado').value = '';

}
const preencheForm = (endereco) =>{
    document.getElementById('rua').value = endereco.logradouro;
    document.getElementById('bairro').value = endereco.bairro;
    document.getElementById('complemento').value = endereco.complemento;
    document.getElementById('cidade').value = endereco.localidade;
    document.getElementById('estado').value = endereco.uf;

}
const cepValido = (cep) => cep.length == 8 && /^[0-9]+$/.test(cep);

const pesquisarCep = async() => {
    clea();
    const cep = document.getElementById('cep').value;
    const url = `http://viacep.com.br/ws/${cep}/json/`;
    if(cepValido(cep)){
        const promise = await fetch(url);
        const endereco = await promise.json();
        if(endereco.hasOwnProperty('erro')){
            document.getElementById('rua').value = 'CEP NÃO ENCONTRADO !';
        }else{
            preencheForm(endereco);
        }
    }else{
        document.getElementById('rua').value = 'CEP INVALIDO!';
    }

}

document.getElementById('cep')
        .addEventListener('focusout', pesquisarCep);



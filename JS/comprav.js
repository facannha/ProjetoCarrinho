function compra() { /*função validar */

    /*==================================================CONFIG-METODO-DE-PAGAMENTO==================================================*/
    if (document.comprar.payment.value == "") {
        alert('Selecione o metodo de pagamento!')
        return false;
    }


    /*==================================================CONFIG-NOME==================================================*/
    if (document.comprar.nome.value == "") {
        alert('Preencha o campo Nome!')
        return false;
    }
    if (document.comprar.nome.value.length <= 8) {
        alert('O campo Nome deve conter mais que 8 caracteres!')
        return false;
    }

    /*==================================================CONFIG-NUMERO-DO-CARTÃO==================================================*/
    if (document.comprar.numero.value == "") {
        alert('Preencha com o Numero do Cartão!')
        return false;
    }
    if (document.comprar.numero.value.length < 16) {
        alert('O Numero do cartão deve conter 16 caracteres!')
        return false;
    }

    /*==================================================CONFIG-DATA-DE-VALIDADE==================================================*/
    if (document.comprar.validade.value == "") {
        alert('Preencha com a Data de Validade!')
        return false;
    }
    if (document.comprar.validade.value.length < 4) {
        alert('A Data de validade do cartão deve conter 4 caracteres!')
        return false;
    }

    /*==================================================CONFIG-CVV/CVC==================================================*/
    if (document.comprar.cvv.value == "") {
        alert('Preencha com CVV/CVC!')
        return false;
    }
    if (document.comprar.cvv.value.length < 3) {
        alert('CVV/CVC deve conter 3 caracteres!')
        return false;
    }

    /*===================================================================================================================*/

    /*==================================================CONFIG-ENDEREÇO==================================================*/
    if (document.comprar.endereco.value == "") {
        alert('Preencha com Endereço!')
        return false;
    }
    if (document.comprar.endereco.value.length < 3) {
        alert('Endereço deve conter 10 caracteres!')
        return false;
    }

    /*==================================================CONFIG-NUMERO==================================================*/
    if (document.comprar.casa.value == "") {
        alert('Preencha com Numero de sua Casa!')
        return false;
    }

    /*==================================================CONFIG-BAIRRO==================================================*/
    if (document.comprar.bairro.value == "") {
        alert('Preencha com Bairro!')
        return false;
    }

    /*==================================================CONFIG-TELEFONE==================================================*/
    if (document.comprar.telefone.value == "") {
        alert('Preencha com Telefone!')
        return false;
    }
}
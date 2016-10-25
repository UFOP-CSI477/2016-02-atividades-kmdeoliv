function calcular() {
    var x = parseFloat(document.calc.primeiro.value);
    var y = parseFloat(document.calc.segundo.value);

    if (document.calc.primeiro.value.length == 0) {
        window.alert("informe o seu peso:");
        document.calc.primeiro.focus();
        return;
    } else if (document.calc.segundo.value.length == 0) {
        window.alert("informe sua altura:");
        document.calc.primeiro.focus();
        return;
    }

    var imc = x / (y * y);
    var i = (y * y) * 18.6;
    var f = (y * y) * 24;

    document.calc.resultado.value = imc.toFixed(2);
    document.calc.ideal.value = "[" + i.toFixed(2) + "," + f.toFixed(2) + "]";

    if (imc <= 18.5) {
        var t = "Abaixo do peso";
    } else if (imc > 18.5 && imc <= 24.9) {
        var t = "Peso ideal";
    } else if (imc > 24.9 && imc <= 29.9) {
        var t = "Levemente acima do peso";
    } else if (imc > 29.9 && imc <= 34.9) {
        var t = "Obesidade grau 1";
    } else if (imc > 34.9 && imc <= 39.9) {
        var t = "Obesidade grau 2";
    } else {
        var t = "Obesidade grau 3";
    }

    window.alert(t);
}
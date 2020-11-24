function insert(num) {
    if (num == 'pangkat') {
        document.form.hasil.value = Math.pow(document.form.hasil.value, 2);
        equal();
    } else {
        document.form.hasil.value = document.form.hasil.value + num;
    }
}

function equal() {
    const exp = document.form.hasil.value;
    if (exp) {
        document.form.hasil.value = eval(exp);
    }
}

function clean() {
    document.form.hasil.value = "";
}
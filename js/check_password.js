function check_pass(){
    const birth_date = new Date(document.querySelector("#date").value).getTime();
    const min_age = 1000*60*60*24*365*18
    const age = Date.now()-birth_date;
    if (age<min_age)return alert("vous n'avez pas l'âge requis");

    const password = document.querySelector("#password").value;
    if (password.length<8)return alert("le mot de passe doit avoir au moins 8 caractères");
    if (!/\d/.test(password))return alert("le mot de passe doit contenire au moins un chiffre");
    if (!/[A-Z]/.test(password))return alert("le mot de passe doit contenir au moins une majuscule");
    if (!/[!@#$%^&*(),.?\":{}|<>]/.test(password))return alert("le mot de passe doit avoir au moins un caractère spécial");
    location.href = "https://2023.webdev-cf2m.be/Gregory/FTP_HOME/";
}
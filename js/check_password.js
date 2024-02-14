function check_pass(){
    const birth_date = new Date(document.querySelector("#date").value).getTime();
    const min_age = 1000*60*60*24*365*18
    const age = Date.now()-birth_date;
    const password = document.querySelector("#password").value;

    if (age<min_age)alert("vous n'avez pas l'âge requis");
    else if (password.length<8)alert("le mot de passe doit avoir au moins 8 caractères");
    else if (!/\d/.test(password))alert("le mot de passe doit contenire au moins un chiffre");
    else if (!/[A-Z]/.test(password))alert("le mot de passe doit contenir au moins une majuscule");
    else if (!/[!@#$%^&*(),.?\":{}|<>]/.test(password))alert("le mot de passe doit avoir au moins un caractère spécial");
    else location.href = "https://2023.webdev-cf2m.be/Gregory/FTP_HOME/";
}
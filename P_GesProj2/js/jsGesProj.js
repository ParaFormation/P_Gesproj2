function checkPasswords()
{
    password = document.getElementById("password1");
    passwordConfirm=document.getElementById("passwordConfirm");

    if(password.value != passwordConfirm.value)
    {
        Materialize.toast("Les mots de passes ne correspondent pas !", 2000, 'red');
        return false;
    }
    else {
        return true;
    }
}

function successMessage(message)
{
    Materialize.toast(message, 2000, 'green');
}

function errorMessage(error)
{
    Materialize.toast(error, 2000, 'red');
}

function checkSurvey(form)
{
    var e = document.forms["surveyForm"].elements["0"].value;
    var group1 = document.getElementsByName('group1');
    var group2 = document.getElementsByName('group2');
    var group3 = document.getElementsByName('group3');
    var group4 = document.getElementsByName('group4');
    var group5 = document.getElementsByName('group5');
    var group6 = document.getElementsByName('group6');
    var group7 = document.getElementsByName('group7');
    var group8 = document.getElementsByName('group8');
    var group9 = document.getElementsByName('group9');
    var group10 = document.getElementsByName('group10');
    var group11 = document.getElementsByName('group11');
    var count = 0;


    for (var i = 0; i < 5; i++)
    {
        if (group1[i].checked)
        {
            count++;
        }
        if (group2[i].checked)
        {
            count++;
        }
        if (group3[i].checked)
        {
            count++;
        }
        if (group4[i].checked)
        {
            count++;
        }
        if (group5[i].checked)
        {
            count++;
        }
        if (group6[i].checked)
        {
            count++;
        }
        if (group7[i].checked)
        {
            count++;
        }
        if (group8[i].checked)
        {
            count++;
        }
        if (group9[i].checked)
        {
            count++;
        }
        if (group10[i].checked)
        {
            count++;
        }
        if (group11[i].checked)
        {
            count++;
        }
    }

    if(count == 11 && e != "Choisissez la formation à évaluer:")
    {
        return true;
    }
    else
    {
        if(count != 11)
        {
            Materialize.toast("Veuillez sélectionner une réponse par question !", 2000, 'red');
        }
        else
        {
            if(e == "Choisissez la formation à évaluer:")
            {
                Materialize.toast("Veuillez sélectionner la formation à évaluer !", 2000, 'red');
            }
        }

        return false;
    }
}
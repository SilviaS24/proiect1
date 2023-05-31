function SetAlert(error)
{
    const errorDiv = document.createElement("div");

    errorDiv.setAttribute('class', 'alert alert-danger');
    errorDiv.setAttribute('role', 'alert');

    errorDiv.appendChild(document.createTextNode(error));

    const mainColumn = document.getElementById("main-column");
    mainColumn.insertBefore(errorDiv, document.getElementById("title"));
}

function OnRegister()
{
    if (
    document.getElementById("nume").value == "" ||
    document.getElementById("password").value == "" )
    {
        SetAlert("Completați toate câmpurile obligatorii!");
    }
    else
    {
       if (document.getElementById("registerform").value != document.getElementById("captcha").value)
            SetAlert("Captcha incorect!");
        else
            document.getElementById("register").submit();
    }
}
function highlight(field, error)
{
    if(error)
    {
        field.style.backgroundColor = "#FF000";
    }
    else
    {
        field.style.backgroundColor = "";
    }
}

function check_names(field)
{
    if(field.value.length < 2 || field.value.length > 100)
    {
        highlight(field, true);
        return false;
    }
    else
    {
        hightlight(field, false);
        return true;
    }
}

function check_mail(field)
{
    var regex = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;

    if (!regex.test(field.value))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }
}

function phone(field)
{
    var regex = /^((\+|00)33\s?|0)[1-5](\s?\d{2}){4}$/
    if (!regex.test(field.value))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }
}

function check_website(field)
{
    var regex = /^https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)$/
    if (!regex.test(field.value))
    {
        highlight(field, true);
        return false;
    }
    else
    {
        highlight(field, false);
        return true;
    }
}
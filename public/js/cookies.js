function setCookie(cname,cvalue,exdays) 
{
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) 
{
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) 
    {
        var c = ca[i];
        while (c.charAt(0) == ' ') 
        {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) 
        {
            return c.substring(name.length, c.length);
        }
    }
  return "";
}

function checkCookie() 
{
    var user=getCookie("username");

    if (user != "") {

    } else {
        user = navigator.userAgent;
        $.confirm({
        title: 'Politica de cookies',
        content: 'Solicitamos su permiso para obtener datos estadísticos de su navegación en esta web, en cumplimiento del Real Decreto-ley 13/2012. Si continúa navegando consideramos que acepta el uso de cookies.',
        buttons: {
            Aceptar: function () { 
                setCookie("username", user, 30);
            },
            Cancelar: function () {  
                setCookie("username", "", 30);
                window.location.href="https://www.google.com/";
            },
            Información: function(){
                setCookie("username", "", 30)
                window.location.href="http://politicadecookies.com";
            }
        }
    });
    }
}

$(document).ready(function() 
{
    checkCookie();
});

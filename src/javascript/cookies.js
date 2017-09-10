function ControlCookie()
{
    var div=document.getElementById("memoria");
    var label=document.createElement("label");

    if(getCookie("nombre")!="")
    {
        while(div.firstChild)
        {
            div.removeChild(div.firstChild);
        }

        label.innerHTML="<label>Hola "+getCookie("nombre")+"!</label>";
        div.appendChild(label);
    }


}



function setCookie(cname,cvalue,exdays)
{
    var d=new Date();
    d.setTime(d.getTime()+(exdays*24*60*60*1000));
    var expires="expires"+d.toUTCString();
    document.cookie=cname+"="+cvalue+";"+expires+";path=/";
}

function getCookie(cname)
{
    var name=cname+"=";
    var decodedCookie=decodeURIComponent(document.cookie);
    var ca=decodedCookie.split(";");
    for (var i = 0; i<ca.length; i++) 
    {
        var c=ca[i];
        while(c.charAt(0)==" ")
        {
            c=c.substring(1);
        }
        if(c.indexOf(name)==0)
        {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function CookieNombre(nombre)
{
    setCookie("nombre",nombre,1);
}

